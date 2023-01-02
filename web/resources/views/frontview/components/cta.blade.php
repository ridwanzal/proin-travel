@if (sizeof($contacts) > 0)
    <a href="https://api.whatsapp.com/send?phone=+{{ $contacts[0]->nomor_telepon }}&amp;text=Assalamualaikum Admin, Saya Ingin Tanya-Tanya Paket Umroh Boleh?"
        target="_blank" class="btn btn-md btn-warning mb-3">Konsultasi sekarang</a>
@else
    <a href="https://api.whatsapp.com/send?phone=+{{ env('CUST_PHONE') }}&amp;text=Assalamualaikum Admin, Saya Ingin Tanya-Tanya Paket Umroh Boleh?"
        target="_blank" class="btn btn-md btn-warning mb-3">Konsultasi sekarang</a>
@endif
