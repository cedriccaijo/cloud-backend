<?php

namespace ContainerKQk6fqc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2607 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3b97c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties673cf = [
        
    ];

    public function getConnection()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getConnection', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getMetadataFactory', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getExpressionBuilder', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'beginTransaction', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getCache', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'transactional', array('func' => $func), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'commit', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->commit();
    }

    public function rollback()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'rollback', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getClassMetadata', array('className' => $className), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'createQuery', array('dql' => $dql), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'createNamedQuery', array('name' => $name), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'createQueryBuilder', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'flush', array('entity' => $entity), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'clear', array('entityName' => $entityName), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->clear($entityName);
    }

    public function close()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'close', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->close();
    }

    public function persist($entity)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'persist', array('entity' => $entity), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'remove', array('entity' => $entity), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'refresh', array('entity' => $entity), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'detach', array('entity' => $entity), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'merge', array('entity' => $entity), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'contains', array('entity' => $entity), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getEventManager', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getConfiguration', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'isOpen', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getUnitOfWork', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getProxyFactory', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'initializeObject', array('obj' => $obj), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'getFilters', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'isFiltersStateClean', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'hasFilters', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return $this->valueHoldera2607->hasFilters();
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

        $instance->initializer3b97c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera2607) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2607 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2607->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, '__get', ['name' => $name], $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        if (isset(self::$publicProperties673cf[$name])) {
            return $this->valueHoldera2607->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2607;

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

        $targetObject = $this->valueHoldera2607;
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
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2607;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2607;
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
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, '__isset', array('name' => $name), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2607;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2607;
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
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, '__unset', array('name' => $name), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2607;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2607;
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
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, '__clone', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        $this->valueHoldera2607 = clone $this->valueHoldera2607;
    }

    public function __sleep()
    {
        $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, '__sleep', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;

        return array('valueHoldera2607');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3b97c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3b97c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3b97c && ($this->initializer3b97c->__invoke($valueHoldera2607, $this, 'initializeProxy', array(), $this->initializer3b97c) || 1) && $this->valueHoldera2607 = $valueHoldera2607;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2607;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2607;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
