use purchase;

SELECT 
	uinit.id as initiatorID,
	uinit.name as initiatorName,
	uinit.email as initiatorEmail,
	utarget.id as targetUserID,
	utarget.name as targetUserName,
	utarget.email as targetUserEmail,
	fr.status as statusRequest,
	fr.created_at as dateRequest
from friend_requests fr join users uinit on fr.initiator_user_id = uinit.id join users utarget on fr.target_user_id = utarget.id;

DROP view if exists view_friend_requests;

CREATE view view_friend_requests as
	SELECT 
	uinit.id as initiatorID,
	uinit.name as initiatorName,
	uinit.email as initiatorEmail,
	utarget.id as targetUserID,
	utarget.name as targetUserName,
	utarget.email as targetUserEmail,
	fr.status as statusRequest,
	fr.created_at as dateRequest
	from friend_requests fr join users uinit on fr.initiator_user_id = uinit.id join users utarget on fr.target_user_id = utarget.id;