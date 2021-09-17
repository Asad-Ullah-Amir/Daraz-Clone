<footer>
    <div class="d-flex justify-content-center">All rights reserved</div>
</footer>

<script>
    let name = document.querySelector('.name');
    let humburger = document.getElementById('humburger');
    let check1 = true;
    humburger.addEventListener('click', () => {
        document.querySelector('.hidden_menu').classList.toggle('show_menu');
    })
    document.onclick = function(e) {
        if (e.target.classList.contains('li_show')) {
            document.querySelector('.Admin_settings').style.display = 'block';
            check1 = false;
        } else if (e.target.classList.contains('name')) {
            if (check1) {
                document.querySelector('.Admin_settings').style.display = 'block';
                check1 = false;
            } else {
                document.querySelector('.Admin_settings').style.display = 'none';
                check1 = true;
            }

        } else {
            document.querySelector('.Admin_settings').style.display = 'none';
            check1 = true;
        }
    }

    let ofsidebar = document.querySelectorAll('.ofsidebar ul li');
    Array.from(ofsidebar).forEach(element =>{
        element.addEventListener('click',(e)=>{
            Array.from(ofsidebar).forEach(elem => {
                elem.classList.remove('siderbarEffect');
            });
            e.target.classList.add('siderbarEffect');
        })
    })
</script>
</body>

</html>