<?php
	require 'Client.php';
	$idClient=POST['id_client'];
	$nameClient=POST['name_client'];
	$directionClient=POST['direction_client'];
	$cityClient=POST['city_client'];
	$companyClient=POST['company_client'];
	$phoneClient=POST['phone_client'];
	$phoneClientExtra=POST['phone_client_extra'];
	$faxClient=POST['fax_client'];
	$emailClient=POST['email_client'];
	$webSiteClient=POST['web_site_client'];
	$costumCategoryId=POST['costum_category_id'];

	newClient($idClient,$nameClient,$directionClient,$cityClient,$companyClient,$phoneClient,$phoneClientExtra,$faxClient,$emailClient,$webSiteClient,$costumCategoryId);
?>