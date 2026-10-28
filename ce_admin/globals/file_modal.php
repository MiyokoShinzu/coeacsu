<div class="modal fade" id="files_modal" tabindex="-1"
    aria-labelledby="filesModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content files-modal">

            <!-- Header -->
            <div class="modal-header files-header">
                <div class="d-flex align-items-center gap-3">
                    <div class="files-header-icon">
                        <i class="bi bi-folder2-open"></i>
                    </div>
                    <div>
                        <h4 class="mb-1" id="filesModalLabel">File Manager</h4>
                        <p class="mb-0">Manage and upload your PDF documents</p>
                    </div>
                </div>

                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body files-body">
                <div class="row g-4">

                    <!-- File Library -->
                    <div class="col-lg-7">
                        <div class="files-section h-100">

                            <div class="files-section-heading">
                                <div>
                                    <h5>My Files</h5>
                                    <p>Browse your available documents</p>
                                </div>

                                <span class="files-count">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    PDF Library
                                </span>
                            </div>

                            <!-- Keep this ID for your existing JavaScript -->
                            <div class="files-library" id="files_row">
                                <!-- Existing JavaScript loads the files here -->
                            </div>

                        </div>
                    </div>

                    <!-- Upload Panel -->
                    <div class="col-lg-5">
                        <div class="upload-panel">

                            <div class="upload-panel-heading">
                                <div class="upload-icon">
                                    <i class="bi bi-cloud-arrow-up"></i>
                                </div>
                                <h5>Upload a Document</h5>
                                <p>Add a PDF file to your library</p>
                            </div>

                            <form id="uploadForm" enctype="multipart/form-data">

                                <label for="file" class="upload-dropzone">
                                    <div class="upload-file-icon">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                    </div>

                                    <span class="upload-main-text">
                                        Choose a PDF file
                                    </span>

                                    <span class="upload-subtext">
                                        Click here to browse your device
                                    </span>

                                    <span class="upload-format">
                                        PDF files only
                                    </span>
                                </label>

                                <input type="file"
                                    name="file"
                                    id="file"
                                    class="form-control d-none"
                                    accept=".pdf,application/pdf"
                                    required>

                                <div class="selected-file" id="selectedFileInfo">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    <span id="selectedFileName">
                                        No file selected
                                    </span>
                                </div>

                                <button type="button" class="btn-upload" id="upload">
                                    <i class="bi bi-cloud-arrow-up me-2"></i>
                                    Upload Document
                                </button>

                                <div class="upload-note">
                                    <i class="bi bi-shield-check"></i>
                                    Select a PDF document to get started.
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer files-footer">
                <span>
                    <i class="bi bi-info-circle me-1"></i>
                    Supported format: PDF
                </span>

                <button type="button" class="btn-files-close"
                    data-bs-dismiss="modal">
                    Close
                </button>
            </div>

        </div>
    </div>
</div>

<style>
    /* ================================
   ASYNC FILE MANAGER
================================ */

    #files_modal {
        --files-orange: #ff4c01;
        --files-orange-light: #fff0e9;
        --files-text: #202633;
        --files-muted: #788190;
        --files-border: #e9ebef;
    }

    #files_modal .modal-dialog {
        max-width: 1100px;
    }

    #files_modal .files-modal {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        background: #f8f9fb;
        box-shadow: 0 24px 80px rgba(22, 29, 40, .18);
    }

    /* Header */
    #files_modal .files-header {
        padding: 24px 28px;
        background: #fff;
        border-bottom: 1px solid var(--files-border);
    }

    #files_modal .files-header h4 {
        color: var(--files-text);
        font-weight: 750;
        font-size: 21px;
    }

    #files_modal .files-header p {
        color: var(--files-muted);
        font-size: 13px;
    }

    #files_modal .files-header-icon {
        width: 48px;
        height: 48px;
        display: grid;
        place-items: center;
        flex-shrink: 0;
        border-radius: 15px;
        background: var(--files-orange-light);
        color: var(--files-orange);
        font-size: 24px;
    }

    /* Main content */
    #files_modal .files-body {
        padding: 26px;
    }

    #files_modal .files-section,
    #files_modal .upload-panel {
        padding: 23px;
        border: 1px solid var(--files-border);
        border-radius: 17px;
        background: #fff;
    }

    #files_modal .files-section-heading {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 23px;
    }

    #files_modal .files-section-heading h5,
    #files_modal .upload-panel-heading h5 {
        color: var(--files-text);
        font-size: 17px;
        font-weight: 750;
        margin-bottom: 6px;
    }

    #files_modal .files-section-heading p,
    #files_modal .upload-panel-heading p {
        color: var(--files-muted);
        font-size: 13px;
        margin-bottom: 0;
    }

    #files_modal .files-count {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 8px 11px;
        border-radius: 9px;
        background: #f4f5f7;
        color: #596273;
        font-size: 12px;
        font-weight: 650;
    }

    /* File library */
    #files_modal .files-library {
        min-height: 260px;
    }

    /*
   Styling for file cards generated inside #files_row.
   Adjust these selectors if your JavaScript uses different markup.
*/
    #files_modal #files_row>div {
        margin-bottom: 12px;
    }

    #files_modal .folder-card {
        position: relative;
        border: 1px solid var(--files-border);
        border-radius: 12px;
        background: #fff;
        padding: 16px;
        transition: border-color .2s ease, box-shadow .2s ease;
    }

    #files_modal .folder-card:hover {
        border-color: #ffb18f;
        box-shadow: 0 5px 18px rgba(255, 76, 1, .08);
    }

    #files_modal .folder-tab {
        top: -10px;
        left: 14px;
        padding: 3px 9px;
        border-radius: 6px;
        background: var(--files-orange);
        color: #fff;
        font-size: 11px;
    }

    /* Upload panel */
    #files_modal .upload-panel-heading {
        margin-bottom: 24px;
    }

    #files_modal .upload-icon {
        width: 46px;
        height: 46px;
        display: grid;
        place-items: center;
        border-radius: 13px;
        background: var(--files-orange-light);
        color: var(--files-orange);
        font-size: 23px;
        margin-bottom: 15px;
    }

    /* Clickable upload area */
    #files_modal .upload-dropzone {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 100%;
        min-height: 185px;
        padding: 20px;
        border: 1.5px dashed #ffc1a7;
        border-radius: 14px;
        background: #fffaf7;
        cursor: pointer;
        transition: background .2s ease, border-color .2s ease;
    }

    #files_modal .upload-dropzone:hover {
        background: #fff2eb;
        border-color: var(--files-orange);
    }

    #files_modal .upload-file-icon {
        width: 52px;
        height: 52px;
        display: grid;
        place-items: center;
        border-radius: 15px;
        background: #fff;
        color: var(--files-orange);
        font-size: 27px;
        box-shadow: 0 4px 15px rgba(30, 30, 30, .06);
        margin-bottom: 13px;
    }

    #files_modal .upload-main-text {
        color: var(--files-text);
        font-size: 14px;
        font-weight: 700;
    }

    #files_modal .upload-subtext {
        color: var(--files-muted);
        font-size: 12px;
        margin-top: 5px;
    }

    #files_modal .upload-format {
        margin-top: 12px;
        padding: 5px 10px;
        border-radius: 7px;
        background: #ffe8dd;
        color: #c83d00;
        font-size: 11px;
        font-weight: 700;
    }

    /* Selected file */
    #files_modal .selected-file {
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 0;
        margin-top: 14px;
        padding: 12px;
        border: 1px solid var(--files-border);
        border-radius: 10px;
        color: var(--files-muted);
        font-size: 12px;
    }

    #files_modal .selected-file>i {
        color: var(--files-orange);
        font-size: 20px;
    }

    #files_modal #selectedFileName {
        overflow-wrap: anywhere;
    }

    /* Upload button */
    #files_modal .btn-upload {
        width: 100%;
        margin-top: 17px;
        padding: 13px 16px;
        border: none;
        border-radius: 11px;
        background: var(--files-orange);
        color: #fff;
        font-size: 14px;
        font-weight: 700;
        transition: background .2s ease, transform .2s ease;
    }

    #files_modal .btn-upload:hover {
        background: #e74300;
        transform: translateY(-1px);
    }

    #files_modal .upload-note {
        display: flex;
        align-items: flex-start;
        gap: 7px;
        margin-top: 14px;
        color: var(--files-muted);
        font-size: 11px;
        line-height: 1.5;
    }

    #files_modal .upload-note i {
        color: #198754;
        font-size: 14px;
    }

    /* Footer */
    #files_modal .files-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 17px 26px;
        background: #fff;
        border-top: 1px solid var(--files-border);
    }

    #files_modal .files-footer>span {
        color: var(--files-muted);
        font-size: 12px;
    }

    #files_modal .btn-files-close {
        padding: 9px 18px;
        border: 1px solid #e1e4e9;
        border-radius: 9px;
        background: #fff;
        color: #424b59;
        font-size: 13px;
        font-weight: 650;
    }

    #files_modal .btn-files-close:hover {
        background: #f4f5f7;
    }

    /* Responsive */
    @media (max-width: 767.98px) {
        #files_modal .modal-dialog {
            margin: 10px;
        }

        #files_modal .files-header {
            padding: 18px;
        }

        #files_modal .files-body {
            padding: 14px;
        }

        #files_modal .files-section,
        #files_modal .upload-panel {
            padding: 17px;
        }

        #files_modal .files-footer {
            padding: 14px 17px;
        }
    }
</style>

<script>
    (function() {
        const fileInput = document.getElementById('file');
        const fileName = document.getElementById('selectedFileName');
        const uploadLabel = document.querySelector(
            '#files_modal .upload-main-text'
        );
        const uploadSubtext = document.querySelector(
            '#files_modal .upload-subtext'
        );

        if (!fileInput || !fileName) return;

        fileInput.addEventListener('change', function() {
            const file = this.files && this.files[0];

            if (!file) {
                fileName.textContent = 'No file selected';
                if (uploadLabel) uploadLabel.textContent = 'Choose a PDF file';
                if (uploadSubtext) {
                    uploadSubtext.textContent = 'Click here to browse your device';
                }
                return;
            }

            fileName.textContent = file.name;

            if (uploadLabel) uploadLabel.textContent = 'File selected';
            if (uploadSubtext) {
                uploadSubtext.textContent = 'Click to choose a different file';
            }
        });
    })();
</script>