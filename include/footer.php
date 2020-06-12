        <!-- Footer -->
        <footer class="bg-light py-5">
            <hr>
            <p class="text-center">
                <a href="luxury.php" class="mx-2 text-muted">Luxury City Air</a>
                <a href="products.php" class="mx-2 text-muted">Products</a>
                <a href="about.php" class="mx-2 text-muted">About Us</a>
                <a href="contact.php" class="mx-2 text-muted">Contact Us</a>
            </p>

            <p class="text-muted text-center">Powered by RapidAir Inc. &copy; <span id="year"></span></p>

        </footer>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <!-- Year JS -->
        <script>
            let date = new Date();
            let year = date.getFullYear();
            $("#year").html(year);
        </script>
</body>

</html>