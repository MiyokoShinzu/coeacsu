<?php
/*
 * Dynamic banner settings.
 * Preferred: set variables before include().
 * URL alternatives are read from the CURRENT PAGE URL, e.g.
 * ?title=Research&subtitle=Discover%20our%20work&color=%23FF4C01&textColor=%23FFFFFF&overlay=0.10&imageOpacity=1.00
 *
 * Do not append query parameters to the include path itself.
 */
$bannerParam = static function (string $key, string $default = ''): string {
    return (isset($_GET[$key]) && is_string($_GET[$key])) ? trim($_GET[$key]) : $default;
};

$bannerTitle = (isset($bannerTitle) && is_string($bannerTitle) && trim($bannerTitle) !== '')
    ? trim($bannerTitle) : $bannerParam('title', 'Welcome');
$bannerSubtitle = (isset($bannerSubtitle) && is_string($bannerSubtitle))
    ? trim($bannerSubtitle) : $bannerParam('subtitle', 'Explore the College of Engineering and Architecture.');
$bannerKicker = (isset($bannerKicker) && is_string($bannerKicker))
    ? trim($bannerKicker) : $bannerParam('kicker', 'College of Engineering and Architecture');
$bannerImage = (isset($bannerImage) && is_string($bannerImage) && trim($bannerImage) !== '')
    ? trim($bannerImage) : $bannerParam('image', '../assets/ce_faculty.jfif');
$bannerAlt = (isset($bannerAlt) && is_string($bannerAlt) && trim($bannerAlt) !== '')
    ? trim($bannerAlt) : $bannerParam('alt', 'College of Engineering and Architecture');

$bannerColor = (isset($bannerColor) && is_string($bannerColor) && trim($bannerColor) !== '')
    ? trim($bannerColor) : $bannerParam('color', '#FF4C01');
$bannerTextColor = (isset($bannerTextColor) && is_string($bannerTextColor) && trim($bannerTextColor) !== '')
    ? trim($bannerTextColor) : $bannerParam('textColor', '#FFFFFF');
$bannerOverlayColor = (isset($bannerOverlayColor) && is_string($bannerOverlayColor) && trim($bannerOverlayColor) !== '')
    ? trim($bannerOverlayColor) : $bannerParam('overlayColor', $bannerColor);
$bannerOverlayRaw = (isset($bannerOverlayOpacity) && is_numeric($bannerOverlayOpacity))
    ? (string)$bannerOverlayOpacity : $bannerParam('overlay', '0.10');

// Optional image transparency: 1 = fully visible, 0 = invisible.
$bannerImageOpacityRaw = (isset($bannerImageOpacity) && is_numeric($bannerImageOpacity))
    ? (string)$bannerImageOpacity : $bannerParam('imageOpacity', '1.00');

$validHexColor = static function (string $value, string $fallback): string {
    return preg_match('/^#(?:[0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/', $value) ? $value : $fallback;
};
$bannerColor = $validHexColor($bannerColor, '#FF4C01');
$bannerTextColor = $validHexColor($bannerTextColor, '#FFFFFF');
$bannerOverlayColor = $validHexColor($bannerOverlayColor, $bannerColor);
$bannerOverlayOpacity = is_numeric($bannerOverlayRaw) ? max(0, min(1, (float)$bannerOverlayRaw)) : 0.10;
$bannerImageOpacity = is_numeric($bannerImageOpacityRaw) ? max(0, min(1, (float)$bannerImageOpacityRaw)) : 1.00;

$hexToRgb = static function (string $hex): string {
    $hex = ltrim($hex, '#');
    if (strlen($hex) === 3) {
        $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
    }
    return hexdec(substr($hex, 0, 2)) . ', ' . hexdec(substr($hex, 2, 2)) . ', ' . hexdec(substr($hex, 4, 2));
};
$bannerOverlayRgb = $hexToRgb($bannerOverlayColor);
$bannerId = 'coea-banner-' . bin2hex(random_bytes(4));
?>

<style>
    /* Banner-only layout: no navbar/header offset. */
    .coea-page-banner {
        position: relative;
        isolation: isolate;
        width: 100vw;
        max-width: none;
        min-width: 0;
        min-height: 100vh;
        margin: 0 0 0 calc(50% - 50vw);
        overflow: hidden;
        background: <?php echo htmlspecialchars($bannerColor, ENT_QUOTES, 'UTF-8'); ?>;
        font-family: 'Poppins', sans-serif;
    }

    .coea-page-banner,
    .coea-page-banner * {
        box-sizing: border-box;
    }

    .coea-page-banner__image {
        position: absolute;
        inset: 0;
        z-index: -2;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: <?php echo number_format($bannerImageOpacity, 3, '.', ''); ?>;
        transform: scale(1.08);
        animation: none;
        will-change: transform;
    }

    .coea-page-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        pointer-events: none;
        background: rgba(<?php echo $bannerOverlayRgb; ?>, <?php echo number_format($bannerOverlayOpacity, 3, '.', ''); ?>);
        animation: none;
    }

    .coea-page-banner__content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        width: 100%;
        min-height: 100vh;
        padding: clamp(32px, 6vw, 88px);
        color: <?php echo htmlspecialchars($bannerTextColor, ENT_QUOTES, 'UTF-8'); ?>;
        text-align: left;
        overflow-wrap: anywhere;
    }

    .coea-page-banner__kicker {
        max-width: 100%;
        margin: 0 0 12px;
        color: inherit;
        font-size: clamp(.75rem, 1.4vw, 1.05rem);
        font-weight: 700;
        letter-spacing: clamp(.08em, .4vw, .18em);
        line-height: 1.5;
        text-transform: uppercase;
        text-shadow: 0 2px 8px rgba(0, 0, 0, .65);
        animation: none;
    }

    .coea-page-banner__title {
        width: 100%;
        max-width: 100%;
        margin: 0;
        color: inherit;
        font-size: clamp(2.7rem, 9vw, 8rem);
        font-weight: 900;
        line-height: 1.02;
        letter-spacing: -.04em;
        text-transform: uppercase;
        overflow-wrap: anywhere;
        hyphens: auto;
        text-shadow: 0 4px 18px rgba(0, 0, 0, .55);
        animation: none;
    }

    .coea-page-banner__accent {
        display: block;
        width: clamp(64px, 10vw, 140px);
        height: 6px;
        flex: 0 0 auto;
        margin: clamp(16px, 2.5vw, 25px) 0 clamp(14px, 2vw, 20px);
        border-radius: 99px;
        background: <?php echo htmlspecialchars($bannerTextColor, ENT_QUOTES, 'UTF-8'); ?>;
        transform-origin: left center;
        animation: none;
    }

    .coea-page-banner__subtitle {
        width: 100%;
        max-width: 760px;
        margin: 0;
        color: inherit;
        font-size: clamp(.98rem, 1.8vw, 1.4rem);
        font-weight: 500;
        line-height: 1.65;
        overflow-wrap: anywhere;
        text-shadow: 0 2px 9px rgba(0, 0, 0, .7);
        animation: none;
    }

    @keyframes coeaBannerImageZoom {
        from {
            opacity: <?php echo number_format($bannerImageOpacity, 3, '.', ''); ?>;
            transform: scale(1.14);
        }

        to {
            opacity: <?php echo number_format($bannerImageOpacity, 3, '.', ''); ?>;
            transform: scale(1.03);
        }
    }

    @keyframes coeaBannerOverlayIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes coeaBannerTitleIn {
        from {
            opacity: 0;
            transform: translateY(24px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @keyframes coeaBannerAccentIn {
        from {
            opacity: 0;
            transform: scaleX(0)
        }

        to {
            opacity: 1;
            transform: scaleX(1)
        }
    }

    @keyframes coeaBannerTextIn {
        from {
            opacity: 0;
            transform: translateY(14px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @keyframes coeaBannerFadeDown {
        from {
            opacity: 0;
            transform: translateY(-10px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    /* Animations start only after JavaScript adds the class.
       This avoids hidden text if a stylesheet or script loads late. */
    .coea-page-banner.cooea-animate .coea-page-banner__image {
        animation: coeaBannerImageZoom 2.2s cubic-bezier(.2, .65, .25, 1) both;
    }

    .coea-page-banner.cooea-animate::before {
        animation: coeaBannerOverlayIn 1.1s ease-out both;
    }

    .coea-page-banner.cooea-animate .coea-page-banner__kicker {
        animation: coeaBannerFadeDown .75s ease both;
    }

    .coea-page-banner.cooea-animate .coea-page-banner__title {
        animation: coeaBannerTitleIn 1s cubic-bezier(.2, .75, .25, 1) both;
    }

    .coea-page-banner.cooea-animate .coea-page-banner__accent {
        animation: coeaBannerAccentIn .8s .25s ease-out both;
    }

    .coea-page-banner.cooea-animate .coea-page-banner__subtitle {
        animation: coeaBannerTextIn .85s .15s ease-out both;
    }

    @media (max-width: 767.98px) {

        .coea-page-banner,
        .coea-page-banner__content {
            min-height: 100vh;
            min-height: 100svh;
        }

        .coea-page-banner__content {
            padding: 32px 22px;
        }

        .coea-page-banner__title {
            font-size: clamp(2.5rem, 13vw, 5rem);
            line-height: 1.04;
            letter-spacing: -.03em;
        }

        .coea-page-banner__kicker {
            font-size: .72rem;
            letter-spacing: .08em;
        }

        .coea-page-banner__accent {
            height: 5px;
        }
    }

    @media (max-width: 380px) {
        .coea-page-banner__content {
            padding: 28px 16px;
        }

        .coea-page-banner__title {
            font-size: clamp(2.2rem, 12vw, 3.2rem);
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .coea-page-banner.cooea-animate .coea-page-banner__kicker,
        .coea-page-banner.cooea-animate .coea-page-banner__title,
        .coea-page-banner.cooea-animate .coea-page-banner__accent,
        .coea-page-banner.cooea-animate .coea-page-banner__subtitle,
        .coea-page-banner.cooea-animate .coea-page-banner__image,
        .coea-page-banner.cooea-animate::before {
            animation: none !important;
            transform: none !important;
        }
    }
</style>

<section class="coea-page-banner"
    id="<?php echo htmlspecialchars($bannerId, ENT_QUOTES, 'UTF-8'); ?>"
    aria-label="<?php echo htmlspecialchars($bannerTitle, ENT_QUOTES, 'UTF-8'); ?> banner">
    <img class="coea-page-banner__image"
        src="<?php echo htmlspecialchars($bannerImage, ENT_QUOTES, 'UTF-8'); ?>"
        alt="<?php echo htmlspecialchars($bannerAlt, ENT_QUOTES, 'UTF-8'); ?>"
        fetchpriority="high">
    <div class="coea-page-banner__content">
        <?php if ($bannerKicker !== ''): ?>
            <p class="coea-page-banner__kicker"><?php echo htmlspecialchars($bannerKicker, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
        <h1 class="coea-page-banner__title"><?php echo htmlspecialchars($bannerTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
        <span class="coea-page-banner__accent" aria-hidden="true"></span>
        <?php if ($bannerSubtitle !== ''): ?>
            <p class="coea-page-banner__subtitle"><?php echo htmlspecialchars($bannerSubtitle, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
    </div>
</section>

<script>
    (() => {
        const banner = document.querySelector('.coea-page-banner');
        if (!banner) return;

        // Respect the visitor's reduced-motion accessibility preference.
        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }

        // Trigger after the browser paints the initial state.
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                banner.classList.add('cooea-animate');
            });
        });
    })();
</script>