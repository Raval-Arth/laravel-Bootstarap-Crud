<!DOCTYPE html>
<html lang="en">
<x-header />
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<body class="bg-light">
    <x-navbar />
    <div class="container">
        <main>

            <div class="row">
                <div class="py-4 col-6 mx-auto order-md-last">
                    <div class="card">
                        <div class="card-body">
                            <h2>login</h2>
                        </div>
                    </div>
                    <x-form />

                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017–2021 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>

</body>

</html>
