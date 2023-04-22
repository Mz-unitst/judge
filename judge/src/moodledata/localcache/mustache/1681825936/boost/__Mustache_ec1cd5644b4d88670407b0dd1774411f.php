<?php

class __Mustache_ec1cd5644b4d88670407b0dd1774411f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation full-width-bottom-border">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('generalnavselector');
        $buffer .= $this->section70583f5a8fcc1cd4ae6828417b1997a8($context, $indent, $value);
        $value = $context->find('groupselector');
        $buffer .= $this->section91166eb8fb77e0a6a9cd8cb3c1b6c289($context, $indent, $value);
        $value = $context->find('userselector');
        $buffer .= $this->section35179164753a73fec25d14201e36bafa($context, $indent, $value);
        $buffer .= $indent . '        <div class="d-flex ml-sm-auto">
';
        $value = $context->find('viewasselector');
        $buffer .= $this->section9a4a85b20a9d8b62c11bba023d7db327($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section70583f5a8fcc1cd4ae6828417b1997a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{>core/tertiary_navigation_selector}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/tertiary_navigation_selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91166eb8fb77e0a6a9cd8cb3c1b6c289(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{{groupselector}}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('groupselector'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35179164753a73fec25d14201e36bafa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{{userselector}}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('userselector'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a4a85b20a9d8b62c11bba023d7db327(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="navitem-divider"></div>
                <div class="navitem">
                    {{{viewasselector}}}
                </div>
                <div class="navitem-divider"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="navitem-divider"></div>
';
                $buffer .= $indent . '                <div class="navitem">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('viewasselector'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
