<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-05 04:06:32 --> Query error: Table 'compatl8_mvc.app_medical_claims' doesn't exist - Invalid query: SELECT `name`, `incident_sub_category_id`, SUM(amtReim) as Cost
FROM `app_medical_claims`
JOIN `illness_sub_category` ON `illness_sub_category`.`illness_sub_category_id`=`app_medical_claims`.`incident_sub_category_id`
GROUP BY `incident_sub_category_id`
ERROR - 2018-10-05 04:06:32 --> Severity: error --> Exception: Call to a member function result_object() on boolean /home/compatl8/public_html/tools/claims/views/backend/facilitator/dashboard.php 111
ERROR - 2018-10-05 06:27:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/compatl8/public_html/tools/claims/controllers/Medical.php 488
ERROR - 2018-10-05 07:33:32 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724812, '')
ERROR - 2018-10-05 07:33:32 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:09 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724849, '')
ERROR - 2018-10-05 07:34:09 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:11 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724851, '')
ERROR - 2018-10-05 07:34:11 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:13 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724853, '')
ERROR - 2018-10-05 07:34:13 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:17 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724857, '')
ERROR - 2018-10-05 07:34:17 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:20 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724860, '')
ERROR - 2018-10-05 07:34:20 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:33 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724873, '')
ERROR - 2018-10-05 07:34:33 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:34 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724874, '')
ERROR - 2018-10-05 07:34:34 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:35 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724875, '')
ERROR - 2018-10-05 07:34:35 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:47 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724887, '')
ERROR - 2018-10-05 07:34:47 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:34:48 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724888, '')
ERROR - 2018-10-05 07:34:48 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:35:05 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724905, '')
ERROR - 2018-10-05 07:35:05 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:35:14 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724914, '')
ERROR - 2018-10-05 07:35:14 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:35:19 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724919, '')
ERROR - 2018-10-05 07:35:19 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:35:25 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724925, '')
ERROR - 2018-10-05 07:35:25 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:36:11 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724971, '')
ERROR - 2018-10-05 07:36:11 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:36:38 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538724998, '')
ERROR - 2018-10-05 07:36:38 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:36:53 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538725013, '')
ERROR - 2018-10-05 07:36:53 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 07:37:55 --> Query error: Duplicate entry 'b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b97f8e248cf94c3a4f1d819da00ce9ffe0d6dc4a', '196.108.59.180', 1538725075, '__ci_last_regenerate|i:1538725075;')
ERROR - 2018-10-05 07:37:55 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:02:01 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726521, '')
ERROR - 2018-10-05 08:02:01 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:03:16 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726596, '')
ERROR - 2018-10-05 08:03:16 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:03:40 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726620, '')
ERROR - 2018-10-05 08:03:40 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:03:51 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726631, '')
ERROR - 2018-10-05 08:03:51 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:04:09 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726649, '')
ERROR - 2018-10-05 08:04:09 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:04:41 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726681, '')
ERROR - 2018-10-05 08:04:41 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:05:08 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726708, '')
ERROR - 2018-10-05 08:05:08 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:06:18 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726778, '')
ERROR - 2018-10-05 08:06:18 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:06:43 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538726803, '')
ERROR - 2018-10-05 08:06:43 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 08:13:44 --> Query error: Duplicate entry 'b37e97302dfa6f3f05bddf6cc28e289035e2e44d' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b37e97302dfa6f3f05bddf6cc28e289035e2e44d', '102.166.33.244', 1538727224, '__ci_last_regenerate|i:1538727224;')
ERROR - 2018-10-05 08:13:44 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:32:13 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735532, '')
ERROR - 2018-10-05 10:32:13 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:32:17 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735537, 'flash_message|s:28:\"Claim submitted Successfully\";__ci_vars|a:1:{s:13:\"flash_message\";s:3:\"new\";}')
ERROR - 2018-10-05 10:32:17 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:37:12 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735832, '__ci_last_regenerate|i:1538735832;admin_login|i:1;admin_id|s:4:\"1638\";login_user_id|s:4:\"1638\";name|s:6:\"MNjeru\";logged_user_level|s:1:\"1\";login_type|s:7:\"partner\";center_id|s:5:\"KE337\";cluster|s:6:\"Isiolo\";app_name|s:6:\"claims\";')
ERROR - 2018-10-05 10:37:12 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:37:12 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735832, '__ci_last_regenerate|i:1538735832;')
ERROR - 2018-10-05 10:37:12 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:37:30 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735850, '__ci_last_regenerate|i:1538735850;admin_login|i:1;admin_id|s:4:\"1638\";login_user_id|s:4:\"1638\";name|s:6:\"MNjeru\";logged_user_level|s:1:\"1\";login_type|s:7:\"partner\";center_id|s:5:\"KE337\";cluster|s:6:\"Isiolo\";app_name|s:6:\"claims\";')
ERROR - 2018-10-05 10:37:30 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:37:31 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735851, '__ci_last_regenerate|i:1538735851;')
ERROR - 2018-10-05 10:37:31 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:37:58 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735878, '__ci_last_regenerate|i:1538735878;admin_login|i:1;admin_id|s:4:\"1638\";login_user_id|s:4:\"1638\";name|s:6:\"MNjeru\";logged_user_level|s:1:\"1\";login_type|s:7:\"partner\";center_id|s:5:\"KE337\";cluster|s:6:\"Isiolo\";app_name|s:6:\"claims\";')
ERROR - 2018-10-05 10:37:58 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:37:59 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735879, '__ci_last_regenerate|i:1538735879;')
ERROR - 2018-10-05 10:37:59 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:38:58 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735938, '__ci_last_regenerate|i:1538735938;admin_login|i:1;admin_id|s:4:\"1638\";login_user_id|s:4:\"1638\";name|s:6:\"MNjeru\";logged_user_level|s:1:\"1\";login_type|s:7:\"partner\";center_id|s:5:\"KE337\";cluster|s:6:\"Isiolo\";app_name|s:6:\"claims\";')
ERROR - 2018-10-05 10:38:58 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:38:59 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538735939, '__ci_last_regenerate|i:1538735939;')
ERROR - 2018-10-05 10:38:59 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:40:08 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538736008, '__ci_last_regenerate|i:1538736008;admin_login|i:1;admin_id|s:4:\"1638\";login_user_id|s:4:\"1638\";name|s:6:\"MNjeru\";logged_user_level|s:1:\"1\";login_type|s:7:\"partner\";center_id|s:5:\"KE337\";cluster|s:6:\"Isiolo\";app_name|s:6:\"claims\";')
ERROR - 2018-10-05 10:40:08 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:40:09 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538736009, '__ci_last_regenerate|i:1538736009;')
ERROR - 2018-10-05 10:40:09 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:40:38 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538736038, '__ci_last_regenerate|i:1538736038;admin_login|i:1;admin_id|s:4:\"1638\";login_user_id|s:4:\"1638\";name|s:6:\"MNjeru\";logged_user_level|s:1:\"1\";login_type|s:7:\"partner\";center_id|s:5:\"KE337\";cluster|s:6:\"Isiolo\";app_name|s:6:\"claims\";')
ERROR - 2018-10-05 10:40:38 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:40:39 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538736039, '__ci_last_regenerate|i:1538736039;')
ERROR - 2018-10-05 10:40:39 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:42:24 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538736144, '__ci_last_regenerate|i:1538736144;')
ERROR - 2018-10-05 10:42:24 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 10:46:08 --> Query error: Duplicate entry 'e32a761869d266d59b2a740c0f3ca3750d03b301' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32a761869d266d59b2a740c0f3ca3750d03b301', '105.62.209.214', 1538736368, '__ci_last_regenerate|i:1538736368;')
ERROR - 2018-10-05 10:46:08 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 11:04:08 --> 404 Page Not Found: Partner/assets
ERROR - 2018-10-05 11:05:10 --> 404 Page Not Found: Partner/assets
ERROR - 2018-10-05 11:05:46 --> 404 Page Not Found: Partner/assets
ERROR - 2018-10-05 11:06:30 --> 404 Page Not Found: Partner/assets
ERROR - 2018-10-05 11:18:00 --> Query error: Duplicate entry '89bc46b3556460c35cff3e758e05ae7d303de6a8' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('89bc46b3556460c35cff3e758e05ae7d303de6a8', '197.183.236.33', 1538738280, '__ci_last_regenerate|i:1538738280;admin_login|i:1;admin_id|s:4:\"1588\";login_user_id|s:4:\"1588\";name|s:7:\"DOUGLAS\";logged_user_level|s:1:\"1\";login_type|s:7:\"partner\";center_id|s:5:\"KE304\";cluster|s:12:\"Meru-Tharaka\";app_name|s:6:\"claims\";')
ERROR - 2018-10-05 11:18:00 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 11:18:01 --> Query error: Duplicate entry '89bc46b3556460c35cff3e758e05ae7d303de6a8' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('89bc46b3556460c35cff3e758e05ae7d303de6a8', '197.183.236.33', 1538738281, '__ci_last_regenerate|i:1538738281;')
ERROR - 2018-10-05 11:18:01 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 12:58:11 --> Severity: Warning --> file_get_contents(uploads/document/medical/claims/11123/PAYMENT_RECEIPT_FOR_PAMELA.pdf): failed to open stream: No such file or directory /home/compatl8/public_html/tools/claims/controllers/Partner.php 560
ERROR - 2018-10-05 13:11:00 --> Query error: Duplicate entry 'b90b88ccaf154ff2dc081ab92f9ec9005f572ceb' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b90b88ccaf154ff2dc081ab92f9ec9005f572ceb', '196.107.54.234', 1538745060, '__ci_last_regenerate|i:1538745060;admin_login|i:1;admin_id|s:4:\"2332\";login_user_id|s:4:\"2332\";name|s:8:\"JTuitoek\";logged_user_level|s:1:\"1\";login_type|s:7:\"partner\";center_id|s:5:\"KE479\";cluster|s:7:\"Baringo\";app_name|s:6:\"claims\";')
ERROR - 2018-10-05 13:11:00 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 13:11:01 --> Query error: Duplicate entry 'b90b88ccaf154ff2dc081ab92f9ec9005f572ceb' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b90b88ccaf154ff2dc081ab92f9ec9005f572ceb', '196.107.54.234', 1538745061, '__ci_last_regenerate|i:1538745061;')
ERROR - 2018-10-05 13:11:01 --> Severity: Warning --> session_write_close(): Failed to write session data (user). Please verify that the current setting of session.save_path is correct (ci_sessions) Unknown 0
ERROR - 2018-10-05 14:38:13 --> 404 Page Not Found: Partner/assets
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:38:28 --> Severity: Warning --> preg_match() expects parameter 2 to be string, array given /home/compatl8/public_html/tools/system/libraries/Email.php 1125
ERROR - 2018-10-05 14:45:45 --> 404 Page Not Found: Partner/assets