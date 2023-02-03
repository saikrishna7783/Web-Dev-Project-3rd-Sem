<?php
require_once "header.php";
?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col1">
                        <img src="img/nokia2.webp" alt="product" width="100%">
                    </div>
                    <div class="col2">
                        <h1>Nokia 5310 Dual SIM Keypad Phone with MP3 Player, Wireless FM Radio and Rear Camera with
                            Flash |
                            White/Red</h1>
                        <h4>3,700 Rupees</h4>
                        <br>
                        <h3>Product Details</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim ipsum officia mollitia nisi
                            minima
                            ut? Cupiditate ad consectetur, recusandae enim dicta itaque nihil eveniet asperiores veniam,
                            veritatis, ea ipsam aspernatur? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis necessitatibus magni est accusamus neque maiores vero corporis tenetur eius, repellat porro magnam amet illum in laudantium culpa atque alias illo.</p>
                        <br>Colour : 
                        <select name="colour" id="colour">
                            <option value="">Select Colour</option>
                            <option value="Red">Burning Red</option>
                            <option value="Orange">Lal Kesari</option>
                            <option value="Green">Nature Green</option>
                        </select>
                        <br>
                        <br>
                        <div>Quantity :
                            <input type="number" value="1">
                        </div>
                        <br>
                        <div>
                            <a href="cart.php" class="button">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <p>Copyright &copy; BMSTechKart.com </p>
        </footer>
    </main>
    <style>
        * {
            box-sizing: border-box;
        }

        section {
            margin: auto;
            padding-top: 20px;
        }

        img {
            border-radius: 0;
            float: left;
        }

        .col1 img {
            padding-right: 40px;
        }

        .col2 {
            margin: auto;
            padding: 0 20%;
        }

        .logo_container img {
            border-radius: 500px;
        }

        .button {
            background-color: #182179;
            border: none;
            color: white;
            padding: 5px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 30px;
        }
    </style>
</body>

</html>