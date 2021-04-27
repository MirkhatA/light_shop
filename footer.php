    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

    <script>
        const config = {
            type: 'carousel',
            perView: 6,
            autoplay: 2000,
            hoverpause: true,
            breakpoints: {
                600: {
                perView: 1
                }
            }
        }
        new Glide('.glide', config).mount()
    </script>
    
    <!-- script.js connection -->
    <script src="script/script.js"></script>
    
    <!-- bootstrap connection -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>