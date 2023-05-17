<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
</head>

<body>

    <a href="#" data-toggle="modal" data-target="#myModal" data-name="<?php echo $name; ?>" data-email="<?php echo $email; ?>">Open Modal</a>

    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="white-box">
                        <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <label>Name:</label>
                                <input type="text" class="form-control" id="name" readonly>
                            </div>
                            <div class="form-group mb-4">
                                <label>Email:</label>
                                <input type="text" class="form-control" id="email" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Get the data from the anchor link and set it in the modal
            $('a[data-target="#myModal"]').click(function() {
                var name = $(this).data('name');
                var email = $(this).data('email');
                $('#name').val(name);
                $('#email').val(email);
            });
        });
    </script>
</body>

</html>