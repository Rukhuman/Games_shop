--------------------------------------------------------
--  Ref Constraints for Table GAME_COMPANY
--------------------------------------------------------

  ALTER TABLE "SYSTEM"."GAME_COMPANY" ADD CONSTRAINT "GAME_COMPANY_FK1" FOREIGN KEY ("OFI_ID")
	  REFERENCES "SYSTEM"."GAME_OFF" ("OF_ID") ENABLE;
