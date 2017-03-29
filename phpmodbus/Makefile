include ../configs.makefile

NORMAL_TARGETS = IecType.php ModbusMaster.php ModbusMasterTcp.php \
	ModbusMasterUdp.php PhpType.php

LIB_DEST = $(PHP_MODBUS_LIB)


install: 
	install -m 755 -d $(LIB_DEST)
	install -m 644 $(NORMAL_TARGETS) $(LIB_DEST)

uninstall:
	rm -r $(LIB_DEST)
	#rm -f$(foreach module,$(PHP_MODBUS_LIB), $(LIB_DEST)/$(module))
