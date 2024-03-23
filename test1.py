#!/usr/bin/env python3
# %%
# -*- coding: utf-8 -*-
"""
Created on Tue Mar 28 16:41:54 2023

@author: PrabhanjanPiwalatkar
"""
# %%
import csv
# from numpy import *
from pandas import *
from math import *
import scipy.io
from sklearn.linear_model import LogisticRegression
from sklearn.tree import DecisionTreeClassifier
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
# from numpy import mean
import pandas as pd
# import numpy as np
from sklearn import preprocessing
from sklearn.model_selection import train_test_split
import matplotlib.pyplot as plt
from sklearn.datasets import load_iris
from sklearn.naive_bayes import MultinomialNB
from sklearn.naive_bayes import GaussianNB
from sklearn.metrics import accuracy_score, precision_score, recall_score, f1_score, roc_curve, auc
from sklearn.model_selection import cross_val_score
from sklearn.svm import SVC
import matplotlib.pyplot as plt
from sklearn import metrics
from sklearn import preprocessing
from sklearn import svm


def read():
    import csv

    data = read_csv('Major Feature Data - Sheet1.csv', index_col=0)

    data = data.fillna(0)

    data.reset_index(inplace=True)
    data = data.rename(columns={'index': 'Courses'})

    dataset = data.to_numpy()
    # converting labels strings to numbers
    le = preprocessing.LabelEncoder()
    le.fit(dataset[:, 0])
    list(le.classes_)
    le.transform(dataset[:, 0])
    # converting labels strings to numbers
    le = preprocessing.LabelEncoder()
    new_labels = le.fit_transform(dataset[:, 0])
    X = dataset[:, 1:30]
    y = new_labels

    return X, y


def test():

    X, y = read()

    X_train, X_test, y_train, y_test = train_test_split(X, y, random_state=529)

    # Create Logistic Regression classifer object
    clf = LogisticRegression(solver='lbfgs', max_iter=10000)

    clf_data = clf.fit(X_train, y_train)

    y_predict_data = clf_data.predict(X_test)

    print("Accuracy:", metrics.accuracy_score(y_test, y_predict_data))


def partition():

    X, y = read()

    ratios = [0.1, 0.2, 0.3, 0.4, 0.6]
    accuracies = []

    for index in ratios:
        X_train, X_test, y_train, y_test = train_test_split(
            X, y, test_size=index, random_state=529)

        clf = LogisticRegression(solver='lbfgs', max_iter=10000)

        clf = clf.fit(X_train, y_train)
        y_predict = clf.predict(X_test)

        acc = metrics.accuracy_score(y_test, y_predict)
        accuracies.append(acc)

    print("Accuracy for ratios 90/10:", accuracies[0])
    print("Accuracy for ratios 80/20:", accuracies[1])
    print("Accuracy for ratios 70/30:", accuracies[2])
    print("Accuracy for ratios 60/40:", accuracies[3])
    print("Accuracy for ratios 40/60:", accuracies[4])

    # for loop to find the ratio with the highest accuracy
    max = accuracies[0]
    index = 0
    for i in range(1, len(accuracies)):
        if accuracies[i] > max:
            max = accuracies[i]
            index = i
    print("\n")

    if (index == 0):
        print("Partiton that shows the highest precision accuracy is 90/10")
    elif (index == 1):
        print("Partiton that shows the highest precision accuracy is 80/20")
    elif (index == 2):
        print("Partiton that shows the highest precision accuracy is 70/30")
    elif (index == 3):
        print("Partiton that shows the highest precision accuracy is 60/40")
    else:
        print("Partiton that shows the highest precision accuracy is 40/60\n")


def classifiers():
    X, y = read()

    X_train, X_test, y_train, y_test = train_test_split(X, y, random_state=529)

    clf_dc = DecisionTreeClassifier()
    clf_mnb = MultinomialNB()
    clf_gnb = GaussianNB()
    clf_lr = LogisticRegression(solver='lbfgs', max_iter=10000)
    clf_rfc = RandomForestClassifier()

    clf_dct = clf_dc.fit(X_train, y_train)
    clf_mnbt = clf_mnb.fit(X_train, y_train)
    clf_gnbt = clf_gnb.fit(X_train, y_train)
    clf_lrt = clf_lr.fit(X_train, y_train)
    clf_rfct = clf_rfc.fit(X_train, y_train)

    y_predict_dc = clf_dct.predict(X_test)
    y_predict_mnb = clf_mnbt.predict(X_test)
    y_predict_gnb = clf_gnbt.predict(X_test)
    y_predict_lr = clf_lrt.predict(X_test)
    y_predict_rfc = clf_rfct.predict(X_test)

    acc1 = metrics.accuracy_score(y_test, y_predict_lr)
    acc2 = metrics.accuracy_score(y_test, y_predict_dc)
    acc3 = metrics.accuracy_score(y_test, y_predict_mnb)
    acc4 = metrics.accuracy_score(y_test, y_predict_gnb)
    acc5 = metrics.accuracy_score(y_test, y_predict_rfc)

    print(acc1)
    print(acc2)
    print(acc3)
    print(acc4)
    print(acc5)


def together():
    X, y = read()

    ratios = [0.1, 0.2, 0.3, 0.4, 0.6]
    accuracies = []

    print("Logistic Regression:")
    for index in ratios:
        X_train, X_test, y_train, y_test = train_test_split(
            X, y, test_size=index, random_state=529)

        clf = LogisticRegression(solver='lbfgs', max_iter=10000)

        clf = clf.fit(X_train, y_train)
        y_predict = clf.predict(X_test)

        acc = metrics.accuracy_score(y_test, y_predict)
        accuracies.append(acc)

    print("Accuracy for ratios 90/10:", accuracies[0])
    print("Accuracy for ratios 80/20:", accuracies[1])
    print("Accuracy for ratios 70/30:", accuracies[2])
    print("Accuracy for ratios 60/40:", accuracies[3])
    print("Accuracy for ratios 40/60:", accuracies[4])

    accuracies.clear()

    print("\nDecision Tree Classifier:")
    for index in ratios:
        X_train, X_test, y_train, y_test = train_test_split(
            X, y, test_size=index, random_state=529)

        clf = DecisionTreeClassifier()

        clf = clf.fit(X_train, y_train)
        y_predict = clf.predict(X_test)

        acc = metrics.accuracy_score(y_test, y_predict)
        accuracies.append(acc)

    print("Accuracy for ratios 90/10:", accuracies[0])
    print("Accuracy for ratios 80/20:", accuracies[1])
    print("Accuracy for ratios 70/30:", accuracies[2])
    print("Accuracy for ratios 60/40:", accuracies[3])
    print("Accuracy for ratios 40/60:", accuracies[4])

    accuracies.clear()

    print("\nMultinomialNB Classifier:")
    for index in ratios:
        X_train, X_test, y_train, y_test = train_test_split(
            X, y, test_size=index, random_state=529)

        clf = MultinomialNB()

        clf = clf.fit(X_train, y_train)
        y_predict = clf.predict(X_test)

        acc = metrics.accuracy_score(y_test, y_predict)
        accuracies.append(acc)

    print("Accuracy for ratios 90/10:", accuracies[0])
    print("Accuracy for ratios 80/20:", accuracies[1])
    print("Accuracy for ratios 70/30:", accuracies[2])
    print("Accuracy for ratios 60/40:", accuracies[3])
    print("Accuracy for ratios 40/60:", accuracies[4])

    accuracies.clear()

    print("\nGaussianNB Classifier:")
    for index in ratios:
        X_train, X_test, y_train, y_test = train_test_split(
            X, y, test_size=index, random_state=529)

        clf = GaussianNB()

        clf = clf.fit(X_train, y_train)
        y_predict = clf.predict(X_test)

        acc = metrics.accuracy_score(y_test, y_predict)
        accuracies.append(acc)

    print("Accuracy for ratios 90/10:", accuracies[0])
    print("Accuracy for ratios 80/20:", accuracies[1])
    print("Accuracy for ratios 70/30:", accuracies[2])
    print("Accuracy for ratios 60/40:", accuracies[3])
    print("Accuracy for ratios 40/60:", accuracies[4])

    accuracies.clear()

    print("\nRandom Forest Classifier:")
    for index in ratios:
        X_train, X_test, y_train, y_test = train_test_split(
            X, y, test_size=index, random_state=529)

        clf = RandomForestClassifier()

        clf = clf.fit(X_train, y_train)
        y_predict = clf.predict(X_test)

        acc = metrics.accuracy_score(y_test, y_predict)
        accuracies.append(acc)

    print("Accuracy for ratios 90/10:", accuracies[0])
    print("Accuracy for ratios 80/20:", accuracies[1])
    print("Accuracy for ratios 70/30:", accuracies[2])
    print("Accuracy for ratios 60/40:", accuracies[3])
    print("Accuracy for ratios 40/60:", accuracies[4])

    accuracies.clear()


def graph():
    X, y = read()

    X_train, X_test, y_train, y_test = train_test_split(X, y, random_state=22)

    # Define the classifiers
    classifiers = [
        LogisticRegression(solver='lbfgs', max_iter=10000),
        DecisionTreeClassifier(),
        RandomForestClassifier(),
        GaussianNB(),
        MultinomialNB()
    ]

    accuracy_scores = []
    i = 0
    for clf in classifiers:
        clf.fit(X_train, y_train)
        y_pred = clf.predict(X_test)
        accuracy_scores.append(accuracy_score(y_test, y_pred))
        print(accuracy_scores[i])
        i += 1

    plt.figure(figsize=(9, 7))

    plt.bar(['Logistic Regression', 'Decision Tree', 'Random Forest',
            'GaussianNB', 'MultinomialNB'], accuracy_scores)
    plt.title('Accuracy Scores of Different Sklearn Classifiers')
    plt.xlabel('Classifier')
    plt.ylabel('Accuracy')
    plt.ylim([0, 1])
    plt.show()
    plt.savefig('classifiers.png')


def model(string):
    data = read_csv('Major Feature Data - Sheet1.csv')
    data = data.fillna(0)

    # dropping the major "Recreation and Parks Management"
    # data_edited = data.drop([91])
    # data = data_edited
    le = preprocessing.LabelEncoder()

    # features values excluding the column "total courses"
    X = data.iloc[:, 1:35].values

    # labels(majors) after enconding
    y = le.fit_transform(data.iloc[:, 0])

    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.10)
    lr_model = LogisticRegression(
        max_iter=10000, random_state=3697).fit(X_train, y_train)

    # empty array to store the user's answers later
    features_blank = [0] * 34

    # list of all features names in the dataset
    feature_indexs = data.columns[1:35]

    # list of all features in the dictionary recived from JS
    feature_key = [string['feature'] for string in string]

    # list of all scores in the dictionary recived from JS
    index_key = [string['index'] for string in string]
    # convert scores from strings to integers
    index_key = [int(item) for item in index_key]

    score_counter = 0
    # parse through the dictionary
    # and insert each score to its respective place in the empty array
    for x in feature_key:
        for i, j in enumerate(feature_indexs):
            if j == x:
                features_blank[i] = index_key[score_counter]
                score_counter = score_counter + 1

    pred = lr_model.predict([features_blank])

    # decode the result
    final_pred = le.inverse_transform(pred)
    # print(final_pred)
    return final_pred


if __name__ == "__main__":
    # test()
    # partition()
    # classifiers()
    # together()
    # graph()
    # model([{'feature': 'Accounting/Finance', 'index': '1'},
    #       {'feature': 'Biology', 'index': '1'}])
    pass

# %%
