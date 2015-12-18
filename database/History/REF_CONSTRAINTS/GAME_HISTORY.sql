--------------------------------------------------------
--  Ref Constraints for Table GAME_HISTORY
--------------------------------------------------------

  ALTER TABLE "SYSTEM"."GAME_HISTORY" ADD CONSTRAINT "GAME_HISTORY_FK1" FOREIGN KEY ("G_ID")
	  REFERENCES "SYSTEM"."GAMES" ("GAMES_ID") ENABLE;
  ALTER TABLE "SYSTEM"."GAME_HISTORY" ADD CONSTRAINT "GAME_HISTORY_FK2" FOREIGN KEY ("US_NAME")
	  REFERENCES "SYSTEM"."GAME_USER" ("USERNAME") ENABLE;
