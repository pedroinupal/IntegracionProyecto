<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add supplier</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #DADADB; /* Gris claro */
        }
        .card {
            margin-top: 50px;
        }
        .card-title {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Add Supplier</h2>
                </div>

                <form action="{{ route('suppliers.store') }}" method="post">
                    @csrf

                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="company_name">Company name:</label>
                            <input type="text" id="company_name" name="company_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                     
                        <button type="submit" class="btn btn-primary btn-block">Add supplier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
