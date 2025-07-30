{{-- File: resources/views/partials/_footer.blade.php --}}

<footer class="bg-white pt-5 pb-4">
    <div class="container">
        <div class="row gy-4">

            {{-- KOLOM 1: LOGO & DESKRIPSI SINGKAT --}}
            <div class="col-lg-5 col-md-12">
                <img src="{{ asset('images/ARCS_Logo_Transparant.png') }}" alt="ARCS Logo" style="height: 40px;" class="mb-3">
                <p class="text-muted small">PT. Anugrah Rekatama Cipta Solusi (ARCS) established in 2008.</p>
            </div>

            {{-- KOLOM 2: ALAMAT --}}
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-bold">PT Anugrah Rekatama Cipta Solusi</h6>
                <p class="text-muted small">
                    Menara Imperium, LG-05A<br>
                    Jln. Rasuna Said Kav 01.<br>
                    Jakarta 12980
                </p>
            </div>

            {{-- KOLOM 3: INFO KONTAK --}}
            <div class="col-lg-3 col-md-6">
                <p class="text-muted small">
                    <strong>Phone:</strong> +62 21 2290 1800<br>
                    <strong>Fax:</strong> +62 21 2290 1933<br>
                    <strong>Email:</strong> cs.inquiry@arcs.co.id
                </p>
            </div>

        </div>

        <hr class="my-4">

        <div class="row">
            <div class="col">
                <p class="text-muted small mb-0">Copyright &copy; {{ date('Y') }} PT ARCS. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>