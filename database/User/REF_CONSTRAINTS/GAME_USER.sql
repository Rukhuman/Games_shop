--------------------------------------------------------
--  Ref Constraints for Table GAME_USER
--------------------------------------------------------

  ALTER TABLE "SYSTEM"."GAME_USER" ADD CONSTRAINT "GAME_USER_FK1" FOREIGN KEY ("CARD_NUMBER")
	  REFERENCES "SYSTEM"."GAME_CREDITCARD" ("CARD_NUMBER") ENABLE;
