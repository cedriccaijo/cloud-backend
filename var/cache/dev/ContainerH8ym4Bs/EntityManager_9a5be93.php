<?php

namespace ContainerH8ym4Bs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf5928 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8c821 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7377a = [
        
    ];

    public function getConnection()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getConnection', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getMetadataFactory', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getExpressionBuilder', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'beginTransaction', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getCache', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'transactional', array('func' => $func), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'commit', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->commit();
    }

    public function rollback()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'rollback', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getClassMetadata', array('className' => $className), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'createQuery', array('dql' => $dql), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'createNamedQuery', array('name' => $name), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'createQueryBuilder', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'flush', array('entity' => $entity), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'clear', array('entityName' => $entityName), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->clear($entityName);
    }

    public function close()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'close', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->close();
    }

    public function persist($entity)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'persist', array('entity' => $entity), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'remove', array('entity' => $entity), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'refresh', array('entity' => $entity), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'detach', array('entity' => $entity), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'merge', array('entity' => $entity), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'contains', array('entity' => $entity), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getEventManager', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getConfiguration', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'isOpen', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getUnitOfWork', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getProxyFactory', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'initializeObject', array('obj' => $obj), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'getFilters', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'isFiltersStateClean', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'hasFilters', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return $this->valueHolderf5928->hasFilters();
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

        $instance->initializer8c821 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf5928) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf5928 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf5928->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, '__get', ['name' => $name], $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        if (isset(self::$publicProperties7377a[$name])) {
            return $this->valueHolderf5928->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5928;

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

        $targetObject = $this->valueHolderf5928;
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
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5928;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf5928;
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
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, '__isset', array('name' => $name), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5928;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf5928;
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
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, '__unset', array('name' => $name), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5928;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf5928;
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
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, '__clone', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        $this->valueHolderf5928 = clone $this->valueHolderf5928;
    }

    public function __sleep()
    {
        $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, '__sleep', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;

        return array('valueHolderf5928');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8c821 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8c821;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8c821 && ($this->initializer8c821->__invoke($valueHolderf5928, $this, 'initializeProxy', array(), $this->initializer8c821) || 1) && $this->valueHolderf5928 = $valueHolderf5928;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf5928;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf5928;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
