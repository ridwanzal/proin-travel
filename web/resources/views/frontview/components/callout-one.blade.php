<section class="section__productrange" style="background-color:#F3610B;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12">
                <div class="text-center">
                    <h4 class="text-white mb-4 text__medium-headline">Umroh dengan bimbingan dan ajaran<br />
                        sesuai sunnah Nabi Muhammad Salallahu alaihi’ wasallam</h4>
                    @if (sizeof($contacts) > 0)
                        <a href="https://api.whatsapp.com/send?phone={{ $contacts[0]->nomor_telepon }}&amp;text=Assalamualaikum Admin, Saya Ingin Tanya-Tanya Paket Umroh Boleh?"
                            target="_blank" class="btn btn-md btn-success mb-3">Kontak Kami</a>
                    @else
                        <a href="https://api.whatsapp.com/send?phone=+{{ env('CUST_PHONE') }}&amp;text={{ $source }}"
                            target="_blank" class="btn btn-md btn-success mb-3">Kontak Kami</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
