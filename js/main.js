$(function() {
    new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });

    $("#same_as_billing").on("change", function(){
    if (this.checked) {
      $("[name='shipping_first_name']").val($("[name='first_name']").val());
      $("[name='shipping_last_name']").val($("[name='last_name']").val());
      $("[name='shipping_address_1']").val($("[name='billing_address_1']").val());
      $("[name='shipping_address_2']").val($("[name='billing_address_2']").val());
      $("[name='shipping_city']").val($("[name='billing_city']").val());
      $("[name='shipping_state']").val($("[name='billing_state']").val());
      $("[name='shipping_zip']").val($("[name='billing_zip']").val());
      $("[name='shipping_country']").val($("[name='billing_country']").val());
    }
  });

});