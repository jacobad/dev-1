$('#add-contact').on('click',change);
$('#save-contact').on('click',saveContact);
$(document).on('click', '#address-book ul li', showInfo);
$('#contact-details a').on('click',editContact);
$('#clear-address-book').on('click',deleteContact);