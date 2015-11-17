var showVehicleInfo = function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('.vehicle-info').show();
};

var showVehicleMake = function () {
    $('[name="vehicle-make"]').removeClass('invisible');
};

var showVehicleModel = function () {
    $('[name="vehicle-model"]').removeClass('invisible')
};

var showServices = function () {
  $('section.show-services').show();
};

$( document ).ready(function() {
    $('[name="btn-contact-info"]').click(showVehicleInfo);
    $('[name="vehicle-year"]').change(showVehicleMake);
    $('[name="vehicle-make"]').change(showVehicleModel);
    $('[name="vehicle-model"]').change(showServices);
});