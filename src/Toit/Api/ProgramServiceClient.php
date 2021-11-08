<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class ProgramServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function Run($metadata = [], $options = []) {
        return $this->_bidiRequest('/toit.api.ProgramService/Run',
        ['\Toit\Api\RunResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\RunStartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function RunStart(\Toit\Api\RunStartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.ProgramService/RunStart',
        $argument,
        ['\Toit\Api\RunResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\CompileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Compile(\Toit\Api\CompileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.ProgramService/Compile',
        $argument,
        ['\Toit\Api\CompileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\AnalyzeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Analyze(\Toit\Api\AnalyzeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.ProgramService/Analyze',
        $argument,
        ['\Toit\Api\AnalyzeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\SyntaxAnalyzeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyntaxAnalyze(\Toit\Api\SyntaxAnalyzeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.ProgramService/SyntaxAnalyze',
        $argument,
        ['\Toit\Api\SyntaxAnalyzeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetProgramRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProgram(\Toit\Api\GetProgramRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.ProgramService/GetProgram',
        $argument,
        ['\Toit\Api\GetProgramResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetCompilationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCompilation(\Toit\Api\GetCompilationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.ProgramService/GetCompilation',
        $argument,
        ['\Toit\Api\GetCompilationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\LookupProgramsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LookupPrograms(\Toit\Api\LookupProgramsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.ProgramService/LookupPrograms',
        $argument,
        ['\Toit\Api\LookupProgramsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\DeviceRunRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function DeviceRun(\Toit\Api\DeviceRunRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.ProgramService/DeviceRun',
        $argument,
        ['\Toit\Api\DeviceRunResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\DecodeSystemMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DecodeSystemMessage(\Toit\Api\DecodeSystemMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.ProgramService/DecodeSystemMessage',
        $argument,
        ['\Toit\Api\DecodeSystemMessageResponse', 'decode'],
        $metadata, $options);
    }

}
