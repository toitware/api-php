PROTO_DIR := ./../proto

BUILD_DIR := src

PROTO_FLAGS := --proto_path $(PROTO_DIR)

PROTO_SOURCES := $(shell find $(PROTO_DIR) -name '*.proto')
PROTO_FILES := $(PROTO_SOURCES:$(PROTO_DIR)/%.proto=$(BUILD_DIR)/%.php)

PROTOC := protoc

PROTOC_GEN_GRPC := $(shell which grpc_php_plugin)
PROTO_FLAGS += --plugin=protoc-gen-php-grpc=$(PROTOC_GEN_GRPC)

src/%.php: $(PROTO_DIR)/%.proto
	$(PROTOC) $< --php_out=$(BUILD_DIR) --php-grpc_out=$(BUILD_DIR) $(PROTO_FLAGS)

$(BUILD_DIR):
	mkdir -p $(BUILD_DIR)

protobuf: $(BUILD_DIR) $(PROTO_FILES)

clean:
	rm -rf src
