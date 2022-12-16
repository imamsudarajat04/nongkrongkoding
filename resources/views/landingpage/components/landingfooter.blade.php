<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    Copyright &copy;
                    <span id="year"></span>
                    - NongkrongKoding • All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>

@push('customjs')
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
@endpush
