--------------------------------------------------------
--  Constraints for Table GAME_CREDITCARD
--------------------------------------------------------

  ALTER TABLE "SYSTEM"."GAME_CREDITCARD" MODIFY ("EX_DATE" NOT NULL ENABLE);
  ALTER TABLE "SYSTEM"."GAME_CREDITCARD" MODIFY ("US_NAME" NOT NULL ENABLE);
  ALTER TABLE "SYSTEM"."GAME_CREDITCARD" MODIFY ("CVC" NOT NULL ENABLE);
  ALTER TABLE "SYSTEM"."GAME_CREDITCARD" MODIFY ("CARD_NUMBER" NOT NULL ENABLE);
  ALTER TABLE "SYSTEM"."GAME_CREDITCARD" ADD CONSTRAINT "GAME_CREDITCARD_PK" PRIMARY KEY ("CARD_NUMBER")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSTEM"  ENABLE;
