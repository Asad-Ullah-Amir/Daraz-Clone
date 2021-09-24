<footer>
    <div class="d-flex justify-content-center">All rights reserved</div>
</footer>

<script>
    let humburger = document.getElementById('humburger');
    let check1 = true;
    humburger.addEventListener('click', () => {
        document.querySelector('.hidden_menu').classList.toggle('show_menu');
    })
    $('.name3').click(function(e) {
        $('.Admin_settings').fadeToggle();

    })
</script>
<script src="./js/index1.js"></script>
<script src="./js/actions.js"></script>
</body>

</html>