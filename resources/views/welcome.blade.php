<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Custom Modal Style -->
    <style>
        .custom-modal .modal-content {
            border-radius: 20px;
            border: none;
            background-color: #ffffff;
            text-align: center;
            padding: 30px 20px;
        }

        .custom-modal .success-circle {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px auto;
            border-radius: 50%;
            background-color: #28a745;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-modal .success-circle i {
            color: white;
            font-size: 24px;
        }

        .custom-modal .modal-body {
            font-size: 18px;
            color: #333;
        }

        .custom-modal .btn {
            margin-top: 20px;
        }
    </style>
</head>
<body class="bg-light p-4">

    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('showdata') }}" class="btn btn-outline-primary">Show Categories</a>
        </div>

        <h1 class="mb-4">Add Category</h1>

        <div class="card shadow-sm p-4">
            <form action="{{ url('adddata') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- ✅ Success Modal -->
    @if(session('success'))
    <div class="modal fade custom-modal" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="success-circle">
                    <i class="bi bi-check-lg"></i>
                </div>

                <div class="modal-body">
                    {{ session('success') }}
                </div>

                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
    @endif

    <!-- ✅ Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ✅ Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    @if(session('success'))
    <script>
        window.onload = function () {
            const modal = new bootstrap.Modal(document.getElementById('successModal'));
            modal.show();
        };
    </script>
    @endif

</body>
</html>
