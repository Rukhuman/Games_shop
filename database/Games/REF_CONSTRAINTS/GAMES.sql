--------------------------------------------------------
--  Ref Constraints for Table GAMES
--------------------------------------------------------

  ALTER TABLE "SYSTEM"."GAMES" ADD CONSTRAINT "GAMES_FK1" FOREIGN KEY ("GCOM_ID")
	  REFERENCES "SYSTEM"."GAME_COMPANY" ("COM_ID") ENABLE;
