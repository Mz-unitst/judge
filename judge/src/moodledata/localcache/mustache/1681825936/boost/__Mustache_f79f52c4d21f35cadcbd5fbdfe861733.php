<?php

class __Mustache_f79f52c4d21f35cadcbd5fbdfe861733 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="user-navigation w-100">
';
        $buffer .= $indent . '    <div class="container w-100 d-flex">
';
        $value = $context->find('previoususer');
        $buffer .= $this->section40eb2dd699cd7557d3fb7b5882a3e88c($context, $indent, $value);
        $value = $context->find('nextuser');
        $buffer .= $this->section893a3b22f39e373e833e064985f14219($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCc13e28eabe0fb96dfd9306d331e6a2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gotopreviousreport, gradereport_user ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gotopreviousreport, gradereport_user ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40eb2dd699cd7557d3fb7b5882a3e88c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="previous d-flex">
                <a href="{{url}}" aria-label="{{#str}} gotopreviousreport, gradereport_user {{/str}}">
                    <i class="fa fa-caret-{{previousarrow}} fa-lg pr-1"></i>
                    {{name}}
                </a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="previous d-flex">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionCc13e28eabe0fb96dfd9306d331e6a2c($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <i class="fa fa-caret-';
                $value = $this->resolveValue($context->find('previousarrow'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' fa-lg pr-1"></i>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d173a4035bfd432d51be713ca7c08c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gotonextreport, gradereport_user ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gotonextreport, gradereport_user ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section893a3b22f39e373e833e064985f14219(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="next d-flex ml-auto">
                <a href="{{url}}" aria-label="{{#str}} gotonextreport, gradereport_user {{/str}}">
                    {{name}}
                    <i class="fa fa-caret-{{nextarrow}} fa-lg pl-1"></i>
                </a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="next d-flex ml-auto">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section0d173a4035bfd432d51be713ca7c08c6($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    <i class="fa fa-caret-';
                $value = $this->resolveValue($context->find('nextarrow'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' fa-lg pl-1"></i>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
