PHP_MODBUS_LIB = /usr/local/lib/phpmodbus
ROOT_DIR=/usr/local/plc_reports

SHELL = /bin/bash

CONF_BASE_DIR ?= ..
TEMPLATE_TARGETS ?=


%: %.template $(CONF_BASE_DIR)/macros.config
	$(CONF_BASE_DIR)/scripts/instanciateMacros \
		$(CONF_BASE_DIR)/macros.config < $< > $@

.PHONY: all
all : $(TEMPLATE_TARGETS)

.PHONY: clean
clean:
	rm -f $(TEMPLATE_TARGETS)

$(TEMPLATE_TARGETS:%:%.template) : % : %.template
