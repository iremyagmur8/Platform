$(document).ready(function(){
    /*Dropdown Menu*/
    $('.postDropdown').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.postDropdown-menu').slideToggle(300);
    });
    $('.postDropdown').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.postDropdown-menu').slideUp(300);
    });
    $('.postDropdown .postDropdown-menu li').click(function () {
        $(this).parents('.postDropdown').find('span').text($(this).text());
        $(this).parents('.postDropdown').find('input').attr('value', $(this).attr('id'));

    });

    $('.form-control-file').change(function () {
        var divbul = $(this).data("dosya");
        $('.mesaj-' + divbul).html('<div role="alert" class="alert alert-success alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button> <strong><i class="fa fa-check-circle"></i>&nbsp;' + $(this)[0].files[0].name + ' dosyası eklenmiştir.</div>')


    });
});
