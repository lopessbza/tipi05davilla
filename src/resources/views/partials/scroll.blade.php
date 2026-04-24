<a href="#" id="scroll-to-top" style="position: fixed; bottom: 20px; right: 20px; display: none; background: #333; color: #fff; padding: 10px 15px; border-radius: 5px; text-decoration: none; z-index: 999;">
    ↑ Topo
</a>

<script>
    // Mostrar/Esconder o botão ao rolar a página
    window.onscroll = function() {
        var btn = document.getElementById("scroll-to-top");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    };
</script>