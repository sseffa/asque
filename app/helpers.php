<?php

/**
 * Gönderilen email adresine göre gravatar resmini döner
 * @param $email
 * @return string
 */
function gravatarUrl($email) {

	return "http://www.gravatar.com/avatar/" . md5($email) . "?s=100";
}