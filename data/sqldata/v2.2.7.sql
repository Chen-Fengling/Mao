--user_addres表增加身份证号idcard字段
ALTER TABLE dsc_user_address ADD COLUMN idcard VARCHAR(20);
ALTER TABLE dsc_order_info ADD COLUMN idcard VARCHAR(20);