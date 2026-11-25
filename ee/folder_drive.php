<?php

/**
 * Reusable Google Drive Folder Component
 *
 * Before including this file, define:
 *   $driveFolderLink = 'https://drive.google.com/drive/folders/YOUR_FOLDER_ID';
 *
 * Optional:
 *   $driveFolderTitle
 *   $driveFolderDescription
 *   $driveFolderFrameTitle
 */

if (empty($driveFolderLink) || !is_string($driveFolderLink)) {
    echo '<div class="gdrive-component-message">Google Drive folder link is required.</div>';
    return;
}

$driveFolderTitle = $driveFolderTitle ?? 'Shared Documents';
$driveFolderDescription = $driveFolderDescription
    ?? 'Browse files and folders from the shared Google Drive directory.';
$driveFolderFrameTitle = $driveFolderFrameTitle
    ?? $driveFolderTitle . ' Google Drive Browser';

$driveFolderId = '';

if (preg_match('~drive/folders/([a-zA-Z0-9_-]+)~', $driveFolderLink, $matches)) {
    $driveFolderId = $matches[1];
}

if (!$driveFolderId) {
    echo '<div class="gdrive-component-message">The supplied Google Drive folder link is invalid.</div>';
    return;
}

$driveEmbedUrl = 'https://drive.google.com/embeddedfolderview?id='
    . rawurlencode($driveFolderId) . '#list';

$gdriveEscape = static function ($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?>

<style>
    /* All styles are scoped to this component */
    .gdrive-component {
        --gdrive-accent: #ff4c01;
        --gdrive-ink: #202938;
        --gdrive-muted: #737b88;
        --gdrive-border: #e5e7eb;

        width: min(1180px, calc(100% - 32px));
        margin: 24px auto 42px;
        font-family: 'Poppins', sans-serif;
    }

    .gdrive-component *,
    .gdrive-component *::before,
    .gdrive-component *::after {
        box-sizing: border-box;
    }

    .gdrive-component .gdrive-card {
        overflow: hidden;
        border: 1px solid var(--gdrive-border);
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 16px 45px rgba(25, 39, 58, .09);
    }

    .gdrive-component .gdrive-toolbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
        padding: 18px 22px;
        background: linear-gradient(115deg, #fff7f2, #fff 72%);
        border-bottom: 1px solid #eceff3;
    }

    .gdrive-component .gdrive-info {
        display: flex;
        align-items: center;
        gap: 13px;
        min-width: 0;
    }

    .gdrive-component .gdrive-icon {
        display: grid;
        place-items: center;
        flex: 0 0 46px;
        width: 46px;
        height: 46px;
        border-radius: 14px;
        background: #fff0e8;
        color: var(--gdrive-accent);
        font-size: 1.45rem;
    }

    .gdrive-component .gdrive-info h3 {
        margin: 0 0 4px;
        color: var(--gdrive-ink);
        font-size: 1rem;
        font-weight: 750;
    }

    .gdrive-component .gdrive-info p {
        margin: 0;
        color: var(--gdrive-muted);
        font-size: .8rem;
        line-height: 1.5;
    }

    .gdrive-component .gdrive-actions {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .gdrive-component .gdrive-actions a,
    .gdrive-component .gdrive-actions button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        min-height: 39px;
        padding: 8px 13px;
        border: 1px solid #e0e4ea;
        border-radius: 10px;
        background: #fff;
        color: #303947;
        font: inherit;
        font-size: .82rem;
        font-weight: 650;
        text-decoration: none;
        cursor: pointer;
        transition: background .2s ease, border-color .2s ease;
    }

    .gdrive-component .gdrive-actions a:hover,
    .gdrive-component .gdrive-actions button:hover {
        border-color: #ff7b43;
        background: #fff6f1;
        color: #d94b13;
    }

    .gdrive-component .gdrive-actions .gdrive-primary {
        border-color: var(--gdrive-accent);
        background: var(--gdrive-accent);
        color: #fff;
    }

    .gdrive-component .gdrive-actions .gdrive-primary:hover {
        border-color: #d94300;
        background: #d94300;
        color: #fff;
    }

    .gdrive-component .gdrive-frame-wrap {
        padding: 14px;
        background: #edf0f4;
    }

    .gdrive-component .gdrive-frame {
        display: block;
        width: 100%;
        height: clamp(520px, 75vh, 900px);
        border: 1px solid #e1e5eb;
        border-radius: 12px;
        background: #fff;
    }

    .gdrive-component .gdrive-hint {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        padding: 13px 18px;
        border-top: 1px solid #e9edf2;
        color: #6d7582;
        font-size: .8rem;
        line-height: 1.65;
    }

    .gdrive-component .gdrive-hint-icon {
        flex: 0 0 auto;
        color: var(--gdrive-accent);
        margin-top: 2px;
    }

    .gdrive-component-message {
        width: min(1180px, calc(100% - 32px));
        margin: 24px auto;
        padding: 15px;
        border: 1px solid #f3b5a0;
        border-radius: 10px;
        background: #fff5f1;
        color: #a83208;
        font-family: sans-serif;
    }

    @media (max-width: 767.98px) {
        .gdrive-component {
            width: calc(100% - 24px);
        }

        .gdrive-component .gdrive-card {
            border-radius: 15px;
        }

        .gdrive-component .gdrive-toolbar {
            padding: 15px;
        }

        .gdrive-component .gdrive-actions {
            width: 100%;
        }

        .gdrive-component .gdrive-actions a,
        .gdrive-component .gdrive-actions button {
            flex: 1 1 auto;
            padding: 8px 10px;
        }

        .gdrive-component .gdrive-frame-wrap {
            padding: 7px;
        }

        .gdrive-component .gdrive-frame {
            height: 72vh;
            min-height: 480px;
            border-radius: 9px;
        }
    }

    @media (max-width: 420px) {
        .gdrive-component .gdrive-info {
            align-items: flex-start;
        }

        .gdrive-component .gdrive-icon {
            flex-basis: 40px;
            width: 40px;
            height: 40px;
        }

        .gdrive-component .gdrive-frame {
            min-height: 440px;
        }

        .gdrive-component .gdrive-actions a {
            font-size: .77rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .gdrive-component .gdrive-actions a,
        .gdrive-component .gdrive-actions button {
            transition: none;
        }
    }
</style>

<section class="gdrive-component" aria-label="<?= $gdriveEscape($driveFolderTitle) ?>">
    <div class="gdrive-card">
        <div class="gdrive-toolbar">
            <div class="gdrive-info">
                <span class="gdrive-icon" aria-hidden="true">
                    <i class="bi bi-folder2-open"></i>
                </span>

                <div>
                    <h3><?= $gdriveEscape($driveFolderTitle) ?></h3>
                    <p><?= $gdriveEscape($driveFolderDescription) ?></p>
                </div>
            </div>

            <div class="gdrive-actions">
                <button type="button" class="gdrive-refresh" aria-label="Refresh Google Drive folder">
                    <i class="bi bi-arrow-clockwise" aria-hidden="true"></i>
                    Refresh
                </button>

                <a class="gdrive-primary"
                    href="<?= $gdriveEscape($driveFolderLink) ?>"
                    target="_blank"
                    rel="noopener noreferrer">
                    <i class="bi bi-google" aria-hidden="true"></i>
                    Open in Google Drive
                    <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="gdrive-frame-wrap">
            <iframe
                class="gdrive-frame"
                title="<?= $gdriveEscape($driveFolderFrameTitle) ?>"
                src="<?= $gdriveEscape($driveEmbedUrl) ?>"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allow="fullscreen">
            </iframe>
        </div>

        <div class="gdrive-hint">
            <i class="bi bi-info-circle-fill gdrive-hint-icon" aria-hidden="true"></i>
            <div>
                <strong>Browsing folders:</strong>
                Select a folder in the embedded Google Drive view to browse its contents.
                The folder must be shared as <em>Anyone with the link — Viewer</em>.
                Google controls the embedded interface, so if in-page browsing or preview
                is blocked, use “Open in Google Drive.”
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        // Works independently for every instance of this component.
        document.querySelectorAll('.gdrive-component').forEach(function(component) {
            if (component.dataset.gdriveInitialized === 'true') {
                return;
            }

            component.dataset.gdriveInitialized = 'true';

            var refreshButton = component.querySelector('.gdrive-refresh');
            var frame = component.querySelector('.gdrive-frame');

            if (refreshButton && frame) {
                refreshButton.addEventListener('click', function() {
                    frame.src = frame.src;
                });
            }
        });
    })();
</script>