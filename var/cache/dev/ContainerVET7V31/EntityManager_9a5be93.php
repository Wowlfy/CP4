<?php

namespace ContainerVET7V31;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getConnection', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getMetadataFactory', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getExpressionBuilder', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'beginTransaction', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getCache', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getCache();
    }

    public function transactional($func)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'transactional', array('func' => $func), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->transactional($func);
    }

    public function commit()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'commit', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->commit();
    }

    public function rollback()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'rollback', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getClassMetadata', array('className' => $className), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'createQuery', array('dql' => $dql), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'createNamedQuery', array('name' => $name), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'createQueryBuilder', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'flush', array('entity' => $entity), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'clear', array('entityName' => $entityName), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->clear($entityName);
    }

    public function close()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'close', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->close();
    }

    public function persist($entity)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'persist', array('entity' => $entity), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'remove', array('entity' => $entity), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'refresh', array('entity' => $entity), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'detach', array('entity' => $entity), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'merge', array('entity' => $entity), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getRepository', array('entityName' => $entityName), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'contains', array('entity' => $entity), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getEventManager', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getConfiguration', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'isOpen', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getUnitOfWork', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getProxyFactory', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'initializeObject', array('obj' => $obj), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'getFilters', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'isFiltersStateClean', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, 'hasFilters', array(), $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        return $this->valueHoldere270c->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializercd4ed = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere270c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere270c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere270c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercd4ed && ($this->initializercd4ed->__invoke($valueHoldere270c, $this, '__get', ['name' => $name], $this->initializercd4ed) || 1) && $this->valueHoldere270c = $valueHoldere270c;

        if (isset(self::$publicProperties91043[$name])) {
            return $this->valueHoldere270c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
