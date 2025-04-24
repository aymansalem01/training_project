<footer>
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <h5 style="font-size: 24px">Exclusive</h5>
                <ul>
                    <li>
                        <p style="font-size: 20px;color:white">Subscribe</p>
                    </li>
                </ul>
                <p style="color: white; font-size: 16px">
                    Get 10% off your first order
                </p>
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <div class="email-input" style="width: 75%">
                        <input type="email" name="email" placeholder="Enter your email" />
                        <button type="submit">
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Column 2 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <h5 style="font-size: 20px">Support</h5>
                <p style="font-size: 16px">
                    111 Bijoy sarani, Dhaka,<br />DH 1515, Bangladesh.
                </p>
                <p style="font-size: 16px">exclusive@gmail.com</p>
                <p style="font-size: 16px">+88015-88888-9999</p>
            </div>

            <!-- Column 3 -->
            <div class="col-md-2 col-sm-6 mb-4">
                <h5 style="font-size: 20px">Account</h5>
                <ul>
                    <li><a href="{{ route('account') }}" style="font-size: 16px">My Account</a></li>
                    <li><a href="{{ route('signup') }}" style="font-size: 16px">Login / Register</a></li>
                    <li><a href="{{ route('cart.index') }}" style="font-size: 16px">Cart</a></li>
                    <li><a href="{{ route('cart.index') }}" style="font-size: 16px">Wishlist</a></li>
                    <li><a href="#" style="font-size: 16px">Shop</a></li>
                </ul>
            </div>

            <!-- Column 4 -->
            <div class="col-md-2 col-sm-6 mb-4">
                <h5 style="font-size: 20px">Quick Link</h5>
                <ul>
                    <li><a href="#" style="font-size: 16px">Privacy Policy</a></li>
                    <li><a href="{{ route('about') }}" style="font-size: 16px">About Us</a></li>
                    <li><a href="{{ route('contact') }}" style="font-size: 16px">FAQ</a></li>
                    <li><a href="{{ route('contact') }}" style="font-size: 16px">Contact</a></li>
                </ul>
            </div>

            <!-- Column 5 -->
            <div class="col-md-2 col-sm-6 mb-4">
                <h5 style="font-size: 20px">Download App</h5>
                <p style="font-size: 12px">Save $3 with App New User Only</p>
                <div class="d-flex g-4">
                    <div>
                        <img src="{{ asset('assets\images\qrcode.jpg') }}" alt="QR Code" class="qr-code" />
                    </div>
                    <div class="app-download">
                        <a href="#"><img src="{{ asset('assets\images\google.png') }}" alt="Google Play" /></a>
                        <a href="#"><img src="{{ asset('assets\images\appstore.png') }}" alt="App Store" /></a>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <!-- Social Icons -->

        <!-- Copyright -->
        <div class="copyright">
            <p>© Copyright Rimel 2022. All right reserved</p>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function addItem(itemId) {
        $.ajax({
            url: "{{ route('add-item') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                itemId: itemId,
            },
            success: function(response) {
                console.log(response);
            }
        });
    }

    function deleteItem(itemId) {
        const deleteItemRoute = "{{ url('/delete-item') }}";
        const csrfToken = "{{ csrf_token() }}";
        $.ajax({
            url: deleteItemRoute,
            method: "POST",
            data: {
                _token: csrfToken,
                itemId: itemId,
            },
            success: function(response) {
                console.log("Deleted:", response.message);
                location.reload();
            },
        });
    }

    function AddWishlist(itemId) {
        console.log("Sending ID:", itemId);
        $.ajax({
            url: "{{ route('wishlist.add') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                itemId: itemId,
            },
            success: function(response) {
                console.log("Added:", response.message);
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
                console.log("Response Text:", xhr.responseText);
            }
        });
    }


    function deleteWishlist(itemId) {
        const deleteWishlistRoute = "{{ url('/wishlist.delete') }}";
        const csrfToken = "{{ csrf_token() }}";
        $.ajax({
            url: deleteWishlistRoute,
            method: "POST",
            data: {
                _token: csrfToken,
                itemId: itemId,
            },
            success: function(response) {
                console.log("Deleted:", response.message);
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
                console.log("Response Text:", xhr.responseText);
            }
        });
    }
</script>
</body>

</html>
