document.addEventListener("DOMContentLoaded", function () {

    const tinggiAir = document.getElementById("tinggi_air");

    if (tinggiAir) {

        tinggiAir.addEventListener("input", function () {

            if (this.value < 0) {
                this.value = 0;
            }

        });

    }

});