<footer class="footer">
    <div class="rights">
        <p class="m-0">
            Copyright © 2021 all rights reserved
        </p>
    </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="post">
                <img data-bs-dismiss="modal" class="close_modal" src="<?php echo get_template_directory_uri();?>/assets/img/X.png" alt="x">
                <h2>
                    Зв’язатися з нами
                </h2>
                <div class="client_info">
                    <div class="name pb-3">
                        <input type="text" name="name" placeholder="Олександр">
                    </div>
                    <div class="number pb-3">
                        <input type="number" name="number" placeholder="Телефон">
                    </div>
                    <div class="message pb-3">
                        <textarea name="message" placeholder="Повідомлення"></textarea>
                    </div>
                </div>
                <button type="submit" class="submit_form btn btn-secondary" data-bs-dismiss="modal">Надіслати</button>
            </form>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script>
    new WOW().init();
</script>
</body>
</html>

