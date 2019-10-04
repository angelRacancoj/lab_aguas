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

	if (isset($idClient)) {
		modifyId($idClient);
	}
	if (isset($nameClient)) {
		modifyName($nameClient);
	}
	if (isset($directionClient)) {
		modifyDirection($directionClient);
	}
	if (isset($cityClient)) {
		modifyCity($cityClient);
	}
	if (isset($companyClient)) {
		modifyCompany($companyClient);
	}
	if (isset($phoneClient)) {
		modifyPhone($phoneClient);
	}
	if (isset($phoneClientExtra)) {
		modifyExtraPhone($phoneClientExtra);
	}
	if (isset($faxClient)) {
		modifyFax($faxClient);
	}
	if (isset($emailClient)) {
		modifyEmail($emailClient);
	}
	if (isset($webSiteClient)) {
		modifyWevSite($webSiteClient);
	}
?>