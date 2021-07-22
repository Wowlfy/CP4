<?php

namespace ContainerVET7V31;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere270c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercd4ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties91043 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        if ($this->valueHoldere270c === $returnValue = $this->valueHoldere270c->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializercd4ed = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere270c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldere270c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, '__get', ['name' => $name], $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        if (isset(self::$publicProperties91043[$name])) {
            return $this->valueHoldere270c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere270c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere270c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere270c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere270c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, '__isset', array('name' => $name), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere270c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere270c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, '__unset', array('name' => $name), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere270c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere270c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, '__clone', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        $this->valueHoldere270c = clone $this->valueHoldere270c;
    }

    public function __sleep()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, '__sleep', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return array('valueHoldere270c');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercd4ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercd4ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'initializeProxy', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere270c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere270c;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
