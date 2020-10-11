<script type="text/javascript">
    $(document).ready(function () {
        initSelect2('.select-obat', "{{ url('select/obat') }}");

        $('.select-obat').change(function () {
            val = this.value;
            hasil = val.split('-');

            $('#jumlah_obat').val('');
            $('#sub_total').val('');
            $('#total_bayar').val('');
            $('#kembalian').val('');

            $('#harga').val(hasil[1]);
        });

        $('#jumlah_obat').keyup(function () {
            jumlah = this.value;
            harga = $('#harga').val();

            $('#total_bayar').val('');
            $('#kembalian').val('');

            hasil = jumlah * harga;
            $('#sub_total').val(hasil);
        });

        $('#total_bayar').keyup(function () {
            sub = $('#sub_total').val();
            totalbayar = this.value;

            $('#kembalian').val(hitungkembali(sub, totalbayar));
        });

        function hitungkembali(sub,bayar){
            hasil = bayar - sub;
            if (hasil > 0){
                return hasil;
            } else{
                return 0;
            }
        }

        $('#color-picker-component').colorpicker();

        $('#color').change(function(){
            $('#basic-addon1').attr('style', 'width:40px;background-color:'+this.value)
        })
    })
</script>