<script type="text/javascript">
    $(document).ready(function () {
        initSelect2('.select-category', "{{ url('select/category') }}");

        $('#color-picker-component').colorpicker();

        $('#color').change(function(){
            $('#basic-addon1').attr('style', 'width:40px;background-color:'+this.value)
        })
    })
</script>