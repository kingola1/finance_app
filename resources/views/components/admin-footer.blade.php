</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<script src="/js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{$slot}}
<script>
    var year = document.getElementById("annual-report");
    var yearly = document.getElementById('yearly-modal')
    year.onclick = function summaryModal(){
        yearly.classList.remove("hidden");
    };

    var week = document.getElementById("weekly-report");
    var weekly = document.getElementById("weekly-modal");
    week.onclick = function showModal(){
        weekly.classList.remove("hidden");
    };

</script>

</body>

</html>