--------------------------------------------------------
--  Ref Constraints for Table GAME_CREDITCARD
--------------------------------------------------------

  ALTER TABLE "SYSTEM"."GAME_CREDITCARD" ADD CONSTRAINT "GAME_CREDITCARD_FK1" FOREIGN KEY ("US_NAME")
	  REFERENCES "SYSTEM"."GAME_USER" ("USERNAME") ENABLE;
