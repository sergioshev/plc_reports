
TEMPLATE_TARGETS = poolData.php \
  readPLC.php \
  slotReader.php

NORMAL_TARGETS = pgconfig.php

include ../configs.makefile


install: $(TEMPLATE_TARGETS)
	mkdir -p $(ROOT_DIR)/scripts
	install -m 644 $(TEMPLATE_TARGETS) $(ROOT_DIR)/scripts
	install -m 644 $(NORMAL_TARGETS) $(ROOT_DIR)/scripts

