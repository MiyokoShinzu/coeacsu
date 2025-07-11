<?php include "./globals/head.php" ?>

<body>

    <?php include "./globals/navbar.php"; ?>
    <!-- Main content -->

    <div id="main">
        <nav class="breadcrumb mt-5">
            <span class="breadcrumb-item active" aria-current="page">Research</span>
        </nav>
        <div class="row w-90 mx-auto mt-2">
            <div class="col-lg-11 p-5 mx-auto shadow border">
                <div class="table-responsive">
                    <div class="wrapper w-100 text-end">
                        <button class="btn btn-sm mb-2 mt-2" style="background: rgba(82, 81, 81, 1); color: #fff;" data-bs-toggle="modal" data-bs-target="#files_modal"><i class="bi bi-upload"></i> Upload New File</button>
                    </div>
                    <table id="research_table" class="table p-2 table-hover border table-bordered shadow">
                        <thead>
                            <tr class="border">
                                <th class="text-secondary">Path</th>
                                <th class="text-secondary">Section</th>
                                <th class="text-secondary">Area</th>
                                <th class="text-secondary">Actions</th>

                            </tr>
                        </thead>
                        <tbody id="research_table_body">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- File Upload Modal -->
    <div class="modal fade" tabindex="-1" id="files_modal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog " role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row w-100">
                        <div class="col-lg-12 mx-auto  ">
                            <div class="row">

                            </div>
                            <div class="row" id="files_row"></div>
                        </div>

                        <div class="col-lg-11  mx-auto p-1 ">
                            <form id="uploadForm">
                                <div class="row">
                                    <div class="col-lg-12 w-100 mx-auto">
                                        <strong class="mb-2 h4">File Uploader</strong>
                                    </div>
                                    <hr>
                                    <div class="col-lg-12 mx-auto mb-3">
                                        <div class="form-group">
                                            <label class="mb-2" for="">File (Only PDF files are allowed)</label>
                                            <input type="file" name="file" id="file" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mx-auto mb-3">
                                        <div class="form-group">
                                            <label class="mb-2" for="">File Type</label>
                                            <select name="file_type" id="file_type" class="form-select" required>
                                                <option value="">-- Select File Type --</option>
                                                <option value="pdf">PDF</option>
                                                <option value="video">Video</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mx-auto mb-3">
                                        <div class="form-group">
                                            <label class="mb-2" for="">Section</label>
                                            <select name="section" id="section" class="form-select">

                                                <option value="Narrative Presentation">Narrative Presentation</option>
                                                <option value="Narrative Report">Narrative Report</option>
                                                <option value="Administration Support For Research">Administration Support For Research</option>
                                                <option value="Campus and College RDE Agenda">Campus and College RDE Agenda</option>
                                                <option value="Copyrights AVP">Copyrights AVP</option>
                                                <option value="Faculty Research Awards">Faculty Research Awards</option>
                                                <option value="Student Research Awards">Student Research Awards</option>
                                                <option value="Special Order On Institutionally Funded Research">Special Order On Institutionally Funded Research</option>
                                                <option value="Others">Others</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-12 mx-auto mt-3 text-end">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary w-100" style="background: var(--bs-primary)" id="upload">Upload</button>
                                                <div class="buttons w-100 text-end">
                                                    <button class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal">Close Modal</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .folder-card {
                                            position: relative;
                                            border: 1px solid #ccc;



                                        }

                                        .folder-tab {
                                            position: absolute;
                                            top: -20px;
                                            left: 20px;
                                            background-color: var(--bs-cyan);
                                            color: #fff;
                                            padding: 2px 10px;


                                        }
                                    </style>
                            </form>
                            <hr>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        var modalId = document.getElementById('modalId');

        modalId.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            let button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-whatever');

            // Use above variables to manipulate the DOM
        });
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
        fetch(`../api/select_files.php`)
            .then(res => res.json())
            .then(data => {
                console.log(data);
                data.forEach(file => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
              <td>${file.path}</td>
              <td>${file.section}</td>
              <td>${file.area}</td>
              <td class="text-center d-flex justify-content-center align-items-center">
<a href="handlers/${file.path}" 
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
                    document.getElementById('research_table_body').appendChild(row);
                });
                $('#research_table').DataTable({
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
        function uploadFile(file, section) {
            const formData = new FormData();
            formData.append('file', file);
            formData.append('department', "ce");
            formData.append('area', 'Research');
            formData.append('section', section);



            $.ajax({
                url: './handlers/upload_file.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,

                success: function(data) {
                    try {
                        var response = JSON.parse(data);

                        if (response.success) {
                            $('#upload').addClass('bg-success')

                            $('#upload').html(`<i class='bi bi-check text-white' style="font-size: 1em;">File successfully uploaded</i>`)

                            setTimeout(() => {
                                console.log('File uploaded successfully:', response.success);

                                window.location.reload();
                            }, 800);



                        } else {
                            $('#upload').html('Upload');
                            console.error('File upload failed:', response.error);
                            alert('Upload Failed');
                            window.location.reload();
                        }
                    } catch (e) {
                        console.error('Invalid JSON response', data);
                        $('#upload').html('Upload');
                        alert('Unexpected response from server.');
                        window.location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error uploading file:', error);
                    $('#upload').html('Upload');
                    alert('Upload Failed');

                    window.location.reload();
                }
            });
        }
        // $(document).on('click', '#upload', function(e) {
        //     e.preventDefault();
        //     var section = $('#section').val();
        //     console.log(section);

        //     $('#upload').html(`<div class="spinner-border text-white" role="status"></div>`);

        //     const file = $('#file')[0].files[0];
        //     // assumes a hidden input or source with id="case_id"

        //     if (file) {
        //         const fileSizeLimit = 20 * 1024 * 1024;

        //         if (file.type !== 'application/pdf') {
        //             $('#upload').html('Upload');
        //             alert('Please select a PDF file.');
        //             return;
        //         }

        //         if (file.size > fileSizeLimit) {
        //             $('#upload').html('Upload');
        //             alert('File size exceeds 20MB limit.');
        //             return;
        //         }

        //         uploadFile(file, section);
        //     } else {
        //         $('#upload').html('Upload');
        //         alert('Please select a file.');
        //     }
        // });
        $(document).on('click', '#upload', function(e) {
            e.preventDefault();
            var section = $('#section').val();
            var fileType = $('#file_type').val();
            const file = $('#file')[0].files[0];

            $('#upload').html(`<div class="spinner-border text-white" role="status"></div>`);

            if (!fileType) {
                $('#upload').html('Upload');
                alert('Please select a file type.');
                return;
            }

            if (!file) {
                $('#upload').html('Upload');
                alert('Please select a file.');
                return;
            }

            const fileSizeLimit = 100 * 1024 * 1024; // 100MB for video

            if (fileType === 'pdf') {
                if (file.type !== 'application/pdf') {
                    $('#upload').html('Upload');
                    alert('Please select a valid PDF file.');
                    return;
                }

                if (file.size > 20 * 1024 * 1024) {
                    $('#upload').html('Upload');
                    alert('PDF file size exceeds 20MB limit.');
                    return;
                }

            } else if (fileType === 'video') {
                const allowedVideoTypes = ['video/mp4', 'video/webm', 'video/ogg'];
                if (!allowedVideoTypes.includes(file.type)) {
                    $('#upload').html('Upload');
                    alert('Please select a valid video file (MP4, WebM, Ogg).');
                    return;
                }

                if (file.size > fileSizeLimit) {
                    $('#upload').html('Upload');
                    alert('Video file size exceeds 100MB limit.');
                    return;
                }
            }

            // Proceed with upload
            uploadFile(file, section);
        });
    </script>
    <script>
        $(document).on('click', '#delete_file_btn', function() {
            var id = $(this).attr("data-id");
            var url = $(this).attr("data-url");
            console.log(`./handlers/delete_file.php?id=${id}&url=${url}`)
            fetch(`./handlers/delete_file.php?id=${id}&url=${url}`)
                .then(res => res.json())
                .then(data => {
                    if (data.success == 1) {
                        alert("File deleted successfully");
                        window.location.reload();
                    } else {
                        alert("Failed to delete file");
                    }
                })
                .catch(err => console.error(err));
        });
    </script>


</body>

</html>