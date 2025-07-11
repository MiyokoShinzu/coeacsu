<?php include "./globals/head.php" ?>

<body>

    <?php include "./globals/navbar.php"; ?>
    <!-- Main content -->

    <div id="main">
        <nav class="breadcrumb mt-5">
            <span class="breadcrumb-item active" aria-current="page">Research</span>
        </nav>
        <div class="row w-90 mx-auto">
            <div class="col-lg-12 p-2 mx-auto shadow border">
                <div class="table-responsive">
                    <div class="wrapper w-100 text-end">
                        <button class="btn btn-sm btn-success mb-2 mt-2" data-bs-toggle="modal" data-bs-target="#files_modal"><i class="bi bi-upload"></i> Upload New File</button>
                    </div>
                    <table id="research_table" class="table p-2 table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Path</th>
                                <th>Section</th>
                                <th>Area</th>
                                <th>Actions</th>

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

                        <div class="col-lg-10  mx-auto p-3 ">
                            <form id="uploadForm">
                                <div class="row border p-3 shadow">
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
    <style>
        #research_table {
            font-family: 'Open Sans', 'Poppins', sans-serif;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(174, 14, 14, 0.10);
            overflow: hidden;
        }

        #research_table thead th {
            background: linear-gradient(90deg, #f7f7fa 80%, #ffe3e3 100%);
            color: #ae0e0e;
            font-family: 'Open Sans', 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.12em;
            padding: 16px 12px;
            border: none;
            letter-spacing: 0.5px;
        }

        #research_table tbody td {
            font-family: 'Open Sans', 'Poppins', sans-serif;
            font-size: 1em;
            color: #222;
            background: #fff;
            border: none;
            padding: 14px 12px;
        }

        #research_table tbody tr:nth-child(odd) td {
            background: #f9eaea;
        }

        #research_table tbody tr:hover td {
            background: #ffe3e3;
            transition: background 0.2s;
        }

        .dataTables_filter label {
            font-family: 'Open Sans', 'Poppins', sans-serif;
            font-size: 1em;
            color: #ae0e0e;
            margin-bottom: 0.5em;
        }

        .dataTables_filter input[type="search"] {
            border-radius: 24px;
            border: 1.5px solid #ae0e0e;
            padding: 10px 40px 10px 36px;
            font-size: 1em;
            font-family: 'Open Sans', 'Poppins', sans-serif;
            outline: none;
            background: #fff8f6;
            box-shadow: 0 2px 8px rgba(174, 14, 14, 0.08);
            transition: border 0.2s, box-shadow 0.2s;
            position: relative;
        }

        .dataTables_filter input[type="search"]:focus {
            border: 2px solid #ff904c;
            box-shadow: 0 4px 16px rgba(255, 144, 76, 0.12);
        }

        .dataTables_filter .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2em;
            color: #ae0e0e;
            pointer-events: none;
        }

        .dataTables_paginate .paginate_button {
            border-radius: 16px !important;
            background: #fff8f6 !important;
            color: #ae0e0e !important;
            border: 1px solid #ae0e0e !important;
            margin: 0 2px;
            padding: 6px 14px !important;
            font-family: 'Open Sans', 'Poppins', sans-serif;
            font-size: 1em;
            transition: background 0.2s, color 0.2s;
        }

        .dataTables_paginate .paginate_button.current {
            background: #ae0e0e !important;
            color: #fff !important;
            border: 1px solid #ae0e0e !important;
        }

        .dataTables_info {
            font-family: 'Open Sans', 'Poppins', sans-serif;
            color: #ae0e0e;
            margin-top: 1em;
        }
    </style>
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
<button type="button" class="btn btn-sm btn-primary me-2 info-btn" data-bs-toggle="modal" data-bs-target="#helloModal"><i class="bi bi-info-circle"></i></button>
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
                    responsive: true,
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
                            $('#upload').html('Upload');
                            console.log('File uploaded successfully:', response.success);
                            alert('File successfully uploaded');
                            window.location.reload();
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
        $(document).on('click', '#upload', function(e) {
            e.preventDefault();
            var section = $('#section').val();
            console.log(section);

            $('#upload').html(`<div class="spinner-border text-white" role="status"></div>`);

            const file = $('#file')[0].files[0];
            // assumes a hidden input or source with id="case_id"

            if (file) {
                const fileSizeLimit = 20 * 1024 * 1024;

                if (file.type !== 'application/pdf') {
                    $('#upload').html('Upload');
                    alert('Please select a PDF file.');
                    return;
                }

                if (file.size > fileSizeLimit) {
                    $('#upload').html('Upload');
                    alert('File size exceeds 20MB limit.');
                    return;
                }

                uploadFile(file, section);
            } else {
                $('#upload').html('Upload');
                alert('Please select a file.');
            }
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

    <!-- Hello World Modal -->
    <div class="modal fade" id="helloModal" tabindex="-1" aria-labelledby="helloModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="helloModalLabel">Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Hello World
                </div>
            </div>
        </div>
    </div>

</body>

</html>