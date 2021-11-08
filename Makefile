PROTO_DIR := ./third_party/api/proto

BUILD_DIR := src

PROTO_FLAGS := --proto_path $(PROTO_DIR)

PROTO_SOURCES := $(shell find $(PROTO_DIR) -name '*.proto')
PROTO_FILES := $(PROTO_SOURCES:$(PROTO_DIR)/%.proto=$(BUILD_DIR)/%.faux)

PROTOC := protoc

bin:
	mkdir bin

bin/grpc-php-plugin: bin
	wget -c https://github.com/hellofresh/grpc-protoc-plugins/releases/download/v1.41.0/grpc-php-plugin.v1.41.0.linux.amd64.tar.gz -O - | tar -C bin -xz

PROTOC_GEN_GRPC := bin/grpc-php-plugin
PROTO_FLAGS += --plugin=protoc-gen-php-grpc=$(PROTOC_GEN_GRPC)

src/%.faux: $(PROTO_DIR)/%.proto bin/grpc-php-plugin
	$(PROTOC) $< --php_out=$(BUILD_DIR) --php-grpc_out=$(BUILD_DIR) $(PROTO_FLAGS)
	mkdir -p ${dir $@}
	touch $@

$(BUILD_DIR):
	mkdir -p $(BUILD_DIR)

protobuf: $(BUILD_DIR) $(PROTO_FILES)

clean:
	rm -rf src bin
