<?php

class __Mustache_e01ce1b67a0cd818bffbf1a8559737f9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="zero-state mx-auto w-50 text-center my-6">
';
        $buffer .= $indent . '    <img src="';
        $value = $this->resolveValue($context->find('imglink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" alt="';
        $value = $context->find('str');
        $buffer .= $this->sectionDdd861bf655ab4ceeab69361209d0009($context, $indent, $value);
        $buffer .= '" aria-hidden="true" class="my-5">
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->sectionDdd861bf655ab4ceeab69361209d0009($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    <p>';
        $value = $context->find('str');
        $buffer .= $this->section31db7f2ad92a5ab9f751e3250a18c69b($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionDdd861bf655ab4ceeab69361209d0009(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userreports, gradereport_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userreports, gradereport_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31db7f2ad92a5ab9f751e3250a18c69b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userreportdesc, gradereport_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userreportdesc, gradereport_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
