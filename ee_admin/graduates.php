<?php include "./globals/head.php" ?>

<body>

    <?php include "./globals/navbar.php"; ?>
    <!-- Main content -->

    <div id="main">
        <nav class="breadcrumb async-breadcrumb mt-4 mb-3 px-4 py-3">
            <span class="breadcrumb-item active" aria-current="page">
                <i class="bi bi-people me-2"></i><b>Performance of Graduates</b>
            </span>
        </nav>
        <div class="row w-90 mx-auto mt-2">
            <div class="col-lg-11 p-4 p-md-5 mx-auto async-page-card">
                <div class="async-page-heading">
                    <div>
                        <span class="async-eyebrow">GRADUATE PERFORMANCE</span>
                        <h3>Performance of Graduates Files</h3>
                        <p>Upload, view, and manage graduate performance documents.</p>
                    </div>
                    <button class="btn async-upload-trigger mb-2 mt-2" data-bs-toggle="modal" data-bs-target="#files_modal">
                        <i class="bi bi-cloud-arrow-up me-2"></i>Upload New File
                    </button>
                </div>
                <div class="table-responsive">

                    <table id="graduates_table" class="table p-2 table-hover async-research-table">
                        <thead>
                            <tr class="">
                                <th>Path</th>
                                <th>Section</th>
                                <th>Area</th>
                                <th>DateTime Updated</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody id="graduates_table_body">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- ASYNC File Upload Modal -->
    <div class="modal fade" tabindex="-1" id="files_modal" aria-labelledby="filesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable async-files-dialog" role="document">
            <div class="modal-content async-files-modal">
                <div class="modal-header async-files-header">
                    <div class="d-flex align-items-center gap-3">
                        <div class="async-files-header-icon">
                            <i class="bi bi-cloud-arrow-up"></i>
                        </div>
                        <div>
                            <h5 class="mb-1" id="filesModalLabel">Upload Graduate File</h5>
                            <p class="mb-0">Upload a PDF document or video to the graduate performance library</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body async-files-body">
                    <section class="async-files-upload">
                        <div class="async-files-section-heading mb-4">
                            <div>
                                <span class="async-files-eyebrow">ADD NEW CONTENT</span>
                                <h6>Upload a File</h6>
                                <p>Complete the fields below to upload your document.</p>
                            </div>
                            <div class="async-files-upload-symbol"><i class="bi bi-cloud-arrow-up"></i></div>
                        </div>

                        <form id="uploadForm" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="file" class="async-files-label">Select File <span>*</span></label>
                                    <label for="file" class="async-files-dropzone">
                                        <div class="async-files-drop-icon"><i class="bi bi-file-earmark-arrow-up"></i></div>
                                        <div class="async-files-drop-text">
                                            <strong id="asyncFileName">Choose a file to upload</strong>
                                            <span id="asyncFileHint">Select a PDF document or video from your device</span>
                                        </div>
                                        <span class="async-files-browse">Browse Files</span>
                                    </label>
                                    <input type="file" name="file" id="file" class="form-control d-none" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="file_type" class="async-files-label">File Type <span>*</span></label>
                                    <div class="async-files-input-wrap">
                                        <i class="bi bi-collection-play"></i>
                                        <select name="file_type" id="file_type" class="form-select async-files-input" required>
                                            <option value="">Select file type</option>
                                            <option value="pdf">PDF Document</option>
                                            <option value="video">Video</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="section" class="async-files-label">Performance of Graduates Section <span>*</span></label>
                                    <div class="async-files-input-wrap">
                                        <i class="bi bi-diagram-3"></i>
                                        <select name="section" id="section" class="form-select async-files-input" required>
                                            <option value="Narrative Presentation">Narrative Presentation</option>
                                            <option value="Narrative Report">Narrative Report</option>
                                            <option value="Attachment">Attachment</option>
                                            <option value="Tracer Study">BSCE Tracer Study</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="async-files-note">
                                        <i class="bi bi-info-circle"></i>
                                        <span>Choose the correct file type and graduate section before uploading.</span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="async-files-actions">
                                        <button type="button" class="async-files-cancel" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" id="upload" class="async-files-submit">
                                            <i class="bi bi-cloud-arrow-up"></i><span>Upload File</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

                <div class="modal-footer async-files-footer">
                    <span><i class="bi bi-shield-check me-1"></i> ASYNC File Management</span>
                    <span>Graduate File Upload</span>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* ASYNC orange theme */
        :root {
            --async-orange: #ff4c01;
            --async-orange-light: #fe904d;
            --async-orange-soft: #fff3ed;
            --async-text: #252a35;
            --async-muted: #7a8290;
            --async-border: #e8ebef;
        }

        #main {
            padding-bottom: 32px;
        }

        .async-breadcrumb {
            margin-left: auto;
            margin-right: auto;
            width: 90%;
            border-left: 5px solid var(--async-orange) !important;
            border-radius: 0 10px 10px 0;
            background: #fff;
            box-shadow: 0 3px 12px rgba(20, 25, 35, .06);
            color: var(--async-text);
        }

        .async-breadcrumb .breadcrumb-item {
            color: var(--async-text);
        }

        .async-page-card {
            border: 1px solid var(--async-border);
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 6px 24px rgba(20, 25, 35, .06);
        }

        .async-page-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            flex-wrap: wrap;
            margin-bottom: 22px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--async-border);
        }

        .async-eyebrow {
            display: block;
            margin-bottom: 6px;
            color: var(--async-orange);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.1px;
        }

        .async-page-heading h3 {
            margin: 0 0 5px;
            color: var(--async-text);
            font-size: 24px;
            font-weight: 750;
        }

        .async-page-heading p {
            margin: 0;
            color: var(--async-muted);
            font-size: 13px;
        }

        .async-upload-trigger {
            border: 1px solid var(--async-orange);
            border-radius: 8px;
            padding: 10px 15px;
            background: var(--async-orange);
            color: #fff;
            font-size: 13px;
            font-weight: 650;
            transition: .2s ease;
        }

        .async-upload-trigger:hover {
            border-color: #e74300;
            background: #e74300;
            color: #fff;
        }

        .async-research-table {
            margin-bottom: 0;
            border-color: var(--async-border);
            vertical-align: middle;
        }

        .async-research-table thead th {
            padding: 14px 12px;
            border-bottom: 2px solid #ffd4c2;
            background: #fff7f3;
            color: #393f4b;
            font-size: 12px;
            font-weight: 750;
            white-space: nowrap;
        }

        .async-research-table tbody td {
            padding: 13px 12px;
            color: #4b5361;
            font-size: 12px;
        }

        .async-research-table tbody tr:hover>* {
            background: #fffaf7;
        }

        .async-research-table a.bi-eye-fill {
            color: var(--async-orange);
        }

        .async-research-table a.bi-eye-fill:hover {
            color: #d83d00;
        }

        /* Modal */
        #files_modal .async-files-dialog {
            max-width: 650px;
        }

        #files_modal .async-files-modal {
            overflow: hidden;
            border: 1px solid rgba(30, 35, 45, .06);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 22px 65px rgba(28, 34, 45, .15);
        }

        #files_modal .async-files-header {
            padding: 21px 25px;
            border-bottom: 1px solid var(--async-border);
            background: #fff;
        }

        #files_modal .async-files-header h5 {
            color: var(--async-text);
            font-size: 19px;
            font-weight: 750;
        }

        #files_modal .async-files-header p {
            color: var(--async-muted);
            font-size: 12px;
        }

        #files_modal .async-files-header-icon {
            display: grid;
            width: 47px;
            height: 47px;
            flex-shrink: 0;
            place-items: center;
            border-radius: 13px;
            background: var(--async-orange-soft);
            color: var(--async-orange);
            font-size: 23px;
        }

        #files_modal .async-files-body {
            padding: 24px;
            background: #f9fafb;
        }

        #files_modal .async-files-upload {
            padding: 22px;
            border: 1px solid var(--async-border);
            border-radius: 14px;
            background: #fff;
        }

        #files_modal .async-files-section-heading {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 15px;
        }

        #files_modal .async-files-eyebrow {
            display: block;
            margin-bottom: 7px;
            color: var(--async-orange);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.1px;
        }

        #files_modal .async-files-section-heading h6 {
            margin-bottom: 5px;
            color: var(--async-text);
            font-size: 16px;
            font-weight: 750;
        }

        #files_modal .async-files-section-heading p {
            margin-bottom: 0;
            color: var(--async-muted);
            font-size: 12px;
            line-height: 1.6;
        }

        #files_modal .async-files-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 11px;
            border: 1px solid #ffe1d3;
            border-radius: 8px;
            background: var(--async-orange-soft);
            color: #d94308;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        #files_modal .async-files-upload-symbol {
            display: grid;
            width: 43px;
            height: 43px;
            flex-shrink: 0;
            place-items: center;
            border-radius: 12px;
            background: var(--async-orange-soft);
            color: var(--async-orange);
            font-size: 23px;
        }

        #files_modal .async-files-label {
            display: block;
            margin-bottom: 9px;
            color: var(--async-text);
            font-size: 12px;
            font-weight: 700;
        }

        #files_modal .async-files-label span {
            color: var(--async-orange);
        }

        #files_modal .async-files-dropzone {
            display: flex;
            align-items: center;
            gap: 13px;
            width: 100%;
            padding: 17px;
            border: 1px dashed #ffc4ad;
            border-radius: 11px;
            background: #fffaf7;
            cursor: pointer;
            transition: background .2s ease, border-color .2s ease;
        }

        #files_modal .async-files-dropzone:hover {
            border-color: var(--async-orange);
            background: #fff3ed;
        }

        #files_modal .async-files-drop-icon {
            display: grid;
            width: 44px;
            height: 44px;
            flex-shrink: 0;
            place-items: center;
            border-radius: 10px;
            background: #fff;
            color: var(--async-orange);
            font-size: 23px;
            box-shadow: 0 2px 9px rgba(30, 30, 30, .05);
        }

        #files_modal .async-files-drop-text {
            display: flex;
            flex: 1;
            flex-direction: column;
            gap: 5px;
            min-width: 0;
        }

        #files_modal .async-files-drop-text strong {
            overflow-wrap: anywhere;
            color: var(--async-text);
            font-size: 12px;
            font-weight: 700;
        }

        #files_modal .async-files-drop-text span {
            color: var(--async-muted);
            font-size: 11px;
            line-height: 1.5;
        }

        #files_modal .async-files-browse {
            padding: 8px 10px;
            border: 1px solid #ffd5c3;
            border-radius: 7px;
            background: #fff;
            color: var(--async-orange);
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        #files_modal .async-files-input-wrap {
            position: relative;
        }

        #files_modal .async-files-input-wrap>i {
            position: absolute;
            z-index: 2;
            top: 50%;
            left: 12px;
            color: var(--async-orange);
            font-size: 15px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        #files_modal .async-files-input {
            min-height: 44px;
            padding-left: 36px;
            border: 1px solid #e3e6eb;
            border-radius: 9px;
            background-color: #fff;
            color: var(--async-text);
            font-size: 12px;
            box-shadow: none;
        }

        #files_modal .async-files-input:focus {
            border-color: var(--async-orange-light);
            box-shadow: 0 0 0 3px rgba(255, 76, 1, .09);
        }

        #files_modal .async-files-note {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            padding: 12px 13px;
            border: 1px solid #f1e9e4;
            border-radius: 9px;
            background: #fcfaf9;
            color: var(--async-muted);
            font-size: 11px;
            line-height: 1.6;
        }

        #files_modal .async-files-note i {
            color: var(--async-orange);
            font-size: 15px;
        }

        #files_modal .async-files-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding-top: 4px;
        }

        #files_modal .async-files-cancel,
        #files_modal .async-files-submit {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 42px;
            padding: 10px 17px;
            border-radius: 9px;
            font-size: 12px;
            font-weight: 700;
            transition: background .2s ease, border-color .2s ease;
        }

        #files_modal .async-files-cancel {
            border: 1px solid #e1e4e9;
            background: #fff;
            color: #5e6572;
        }

        #files_modal .async-files-cancel:hover {
            background: #f4f5f7;
        }

        #files_modal .async-files-submit {
            min-width: 145px;
            border: 1px solid var(--async-orange);
            background: var(--async-orange);
            color: #fff;
        }

        #files_modal .async-files-submit:hover {
            border-color: #e74300;
            background: #e74300;
        }

        #files_modal #upload .progress {
            width: 100%;
            height: 8px;
            overflow: hidden;
            border-radius: 20px;
            background: #ffe4d7;
        }

        #files_modal #upload .progress-bar {
            background: var(--async-orange);
        }

        #files_modal .async-files-footer {
            display: flex;
            justify-content: space-between;
            padding: 14px 24px;
            border-top: 1px solid var(--async-border);
            background: #fff;
        }

        #files_modal .async-files-footer span {
            color: var(--async-muted);
            font-size: 10px;
        }

        #files_modal .async-files-footer i {
            color: var(--async-orange);
        }

        /* DataTables controls */
        #graduates_table_wrapper .dataTables_filter,
        #graduates_table_wrapper .dataTables_length,
        #graduates_table_wrapper .dataTables_info,
        #graduates_table_wrapper .dataTables_paginate {
            color: var(--async-muted);
            font-size: 12px;
        }

        #graduates_table_wrapper .dataTables_filter input,
        #graduates_table_wrapper .dataTables_length select {
            border: 1px solid var(--async-border);
            border-radius: 7px;
            padding: 7px 10px;
            background: #fff;
            color: var(--async-text);
        }

        #graduates_table_wrapper .paginate_button.current,
        #graduates_table_wrapper .paginate_button.current:hover {
            border: 1px solid var(--async-orange) !important;
            border-radius: 6px;
            background: var(--async-orange) !important;
            color: #fff !important;
        }

        @media (max-width: 575.98px) {
            .async-breadcrumb {
                width: 94%;
                padding-left: 16px !important;
            }

            .async-page-card {
                padding: 18px !important;
            }

            .async-page-heading h3 {
                font-size: 21px;
            }

            .async-upload-trigger {
                width: 100%;
            }

            #files_modal .async-files-body {
                padding: 13px;
            }

            #files_modal .async-files-header {
                padding: 17px;
            }

            #files_modal .async-files-upload {
                padding: 16px;
            }

            #files_modal .async-files-dropzone {
                flex-wrap: wrap;
                padding: 13px;
            }

            #files_modal .async-files-browse {
                margin-left: 57px;
            }

            #files_modal .async-files-actions {
                flex-direction: column-reverse;
            }

            #files_modal .async-files-cancel,
            #files_modal .async-files-submit {
                width: 100%;
            }

            #files_modal .async-files-footer {
                gap: 8px;
                padding: 13px;
            }
        }
    </style>

    <script>
        (function() {
            const fileInput = document.getElementById('file');
            const fileName = document.getElementById('asyncFileName');
            const fileHint = document.getElementById('asyncFileHint');

            if (!fileInput || !fileName || !fileHint) return;

            fileInput.addEventListener('change', function() {
                const file = this.files && this.files[0];

                if (!file) {
                    fileName.textContent = 'Choose a file to upload';
                    fileHint.textContent = 'Select a PDF document or video from your device';
                    return;
                }

                fileName.textContent = file.name;
                fileHint.textContent = (file.size / (1024 * 1024)).toFixed(2) +
                    ' MB · Selected and ready to upload';
            });
        })();
    </script>

    <!-- Bootstrap JS -->
    <?php include "./globals/scripts.php"; ?>
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script>
        // Add search icon to DataTables search input
        $(document).ready(function() {
            setTimeout(function() {
                var filter = document.querySelector('.dataTables_filter');
                if (filter && !filter.querySelector('.search-icon')) {
                    var icon = document.createElement('span');
                    icon.className = 'search-icon bi bi-search';
                    filter.appendChild(icon);
                    var input = filter.querySelector('input[type="search"]');
                    if (input) {
                        input.style.paddingLeft = '36px';
                    }
                }
            }, 500);
        });
    </script>
    <script>
        // Display only the original filename, hiding the timestamp prefix.
        // The full URL remains unchanged for viewing and deleting the file.
        function getDisplayFilename(filePath) {
            try {
                const pathname = new URL(filePath, window.location.origin).pathname;
                const filename = decodeURIComponent(pathname.split('/').pop() || '');
                return filename.replace(/^\d+_/, '');
            } catch (error) {
                const filename = String(filePath || '').split('/').pop() || '';
                return filename.replace(/^\d+_/, '');
            }
        }

        fetch('../api/select_files.php?department=ee&area=' + encodeURIComponent('Graduates'))
            .then(res => res.json())
            .then(data => {
                console.log(data);
                data.forEach(file => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
              <td>${getDisplayFilename(file.path)}</td>
              <td>${file.section || ''}</td>
              <td>${file.area || ''}</td>
              <td>${file.datetime_update || ''}</td>
              <td class="text-center d-flex justify-content-center align-items-center">
<a href="${file.path}" 
   class="bi bi-eye-fill me-3 fs-5" 
   target="_blank" 
   data-bs-toggle="tooltip" 
   title="View File"></a>

<a href="#" 
   class="bi bi-trash text-danger fs-5" 
   id="delete_file_btn" 
   data-id="${file.id}" 
   data-url="${file.path}" 
   data-bs-toggle="tooltip" 
   title="Delete File"></a>
              </td>
            `;
                    document.getElementById('graduates_table_body').appendChild(row);
                });
                $('#graduates_table').DataTable({
                    dom: 'rftip',
                    "order": [
                        [0, "desc"]
                    ],
                    "pageLength": 10,
                    "lengthMenu": [10, 25, 50, 100],
                    "language": {
                        "search": "Search:",
                        "lengthMenu": "Show _MENU_ entries",
                        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                        "infoEmpty": "No entries available",
                        "paginate": {
                            "next": "Next",
                            "previous": "Previous"
                        }
                    }
                });
            })
            .catch(err => console.error(err))
    </script>
    <script>
        function uploadFile(file, section, fileType) {
            const formData = new FormData();
            formData.append('file', file);
            formData.append('file_type', fileType);
            formData.append('section', section);
            formData.append('area', 'Graduates');
            // Preserve the original department value. The server should validate
            // department permissions using the session, not trust this field alone.
            formData.append('department', 'ee');

            const $button = $('#upload');
            $button.prop('disabled', true)
                .html('<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Uploading...');

            $.ajax({
                url: './handlers/upload_file.php',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                xhr: function() {
                    const xhr = new XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function(event) {
                        if (event.lengthComputable) {
                            const percent = Math.round((event.loaded / event.total) * 100);
                            $button.html(
                                '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:' +
                                percent + '%"></div></div><span>' + percent + '%</span>'
                            );
                        }
                    });
                    return xhr;
                },
                success: function(response) {
                    if (response && (response.success === '1' || response.success === 1 || response.success === true)) {
                        $button.html('<i class="bi bi-check-circle me-1"></i> Uploaded');
                        alert('File uploaded successfully.');
                        window.location.reload();
                        return;
                    }

                    console.error('Upload failed:', response);
                    alert((response && response.error) ? response.error : 'Upload failed.');
                    resetUploadButton();
                },
                error: function(xhr, status, error) {
                    console.error('Upload request failed:', status, error);
                    console.error('HTTP status:', xhr.status);
                    console.error('Server response:', xhr.responseText);
                    let message = 'Upload request failed (HTTP ' + xhr.status + ').';
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.error) message = response.error;
                    } catch (e) {
                        message += ' The server did not return valid JSON. Check F12 > Network > upload_file.php > Response.';
                    }
                    alert(message);
                    resetUploadButton();
                }
            });
        }

        function resetUploadButton() {
            $('#upload').prop('disabled', false)
                .attr('class', 'async-files-submit')
                .html('<i class="bi bi-cloud-arrow-up"></i><span>Upload File</span>');
        }

        $(document).on('click', '#upload', function(event) {
            event.preventDefault();

            const file = $('#file')[0].files[0];
            const fileType = $('#file_type').val();
            const section = $('#section').val();


            if (!fileType) {
                alert('Please select a file type.');
                return;
            }
            if (!file) {
                alert('Please select a file.');
                return;
            }
            if (!section) {
                alert('Please select a graduate section.');
                return;
            }

            const allowedVideoTypes = ['video/mp4', 'video/webm', 'video/ogg'];
            if (fileType === 'pdf') {
                if (file.type !== 'application/pdf' && !file.name.toLowerCase().endsWith('.pdf')) {
                    alert('Please select a PDF file.');
                    return;
                }
                if (file.size > 20 * 1024 * 1024) {
                    alert('PDF file size exceeds the 20 MB limit.');
                    return;
                }
            } else if (fileType === 'video') {
                if (!allowedVideoTypes.includes(file.type)) {
                    alert('Please select a valid video file (MP4, WebM, or Ogg).');
                    return;
                }
                if (file.size > 100 * 1024 * 1024) {
                    alert('Video file size exceeds the 100 MB limit.');
                    return;
                }
            } else {
                alert('Invalid file type selected.');
                return;
            }

            uploadFile(file, section, fileType);
        });
    </script>
    <script>
        $(document).on('click', '#delete_file_btn', function() {

            var id = $(this).attr("data-id");
            var url = $(this).attr("data-url");
            if (!confirm('Are you sure you want to delete this graduate file?')) return;

            fetch(`./handlers/delete_file.php?id=${encodeURIComponent(id)}&url=${encodeURIComponent(url)}`)
                .then(res => res.json())
                .then(data => {
                    if (data.success == 1 || data.success === true) {
                        alert('File deleted successfully');
                        window.location.reload();
                    } else {
                        alert(data.error || 'Failed to delete file');
                        console.error('Delete failed:', data);
                    }
                })
                .catch(err => {
                    console.error('Delete request failed:', err);
                    alert('An error occurred while deleting the file.');
                });
        });
    </script>


</body>

</html>